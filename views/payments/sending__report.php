<?php
require_once __DIR__ . '/../../app/controller/Email.php';

use App\Email\Email;

$host = 'localhost';
$dbname = 'kunduli';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch records with created_at > 3 days ago and report_delivery = 0
    $query = "
        SELECT * 
        FROM user_payment_information 
        WHERE created_at < NOW() - INTERVAL 3 HOUR 
        AND report_delivery = 0
    ";
    $stmt = $pdo->query($query);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


// API credentials
$api_key = '632374';
$api_secret = 'ab3fb7faf4342c0aa9e3bb4683069d09094c078b';

// Define the API endpoint
$api_url = 'https://pdf.astrologyapi.com/v1/basic_horoscope_pdf';

// Create the Authorization header value
$auth_string = base64_encode($api_key . ':' . $api_secret);
$auth_header = 'Authorization: Basic ' . $auth_string;

foreach ($records as $record) {
    // Prepare data for the API request
    $postData = [
        'name' => $record['name'],
        'gender' => $record['gender'],
        'day' => $record['day'],
        'month' => $record['month'],
        'year' => $record['year'],
        'hour' => $record['hour'],
        'min' => $record['min'],
        'lat' => $record['lat'],
        'lon' => $record['lon'],
        'language' => $record['language'],
        'tzone' => $record['tzone'],
        'place' => $record['place'],
        'chart_style' => 'NORTH_INDIAN',  // Assuming North Indian style, change as needed
        'footer_link' => 'https://nukshatra.in/',
        'logo_url' => 'https://nukshatra.in/src/imgs/logo.jpg',
        'company_name' => 'Nukshatra',
        'company_info' => 'Nukshatra',
        'domain_url' => 'https://nukshatra.in/',
        'company_email' => 'support@nukshatra.in',
        'company_landline' => '+91-1234567890',
        'company_mobile' => '+91-9876543210'
    ];

    // Initialize cURL
    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        $auth_header  // Adding the Basic Auth header
    ]);

    // Execute the request and fetch response
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Path to the default PDF (relative to this script)
    $default_pdf_path = __DIR__ . '/english.pdf';

    // Check if the API response is 405 or the PDF URL is not returned
    if ($http_code == 405 || !$response || !isset(json_decode($response, true)['pdf_url'])) {
        // Load the default PDF file if the requested PDF is not found or API returns 405
        $pdf_content = file_get_contents($default_pdf_path);
    } else {
        // Fetch the PDF content from the provided URL
        $pdf_url = json_decode($response, true)['pdf_url'];
        $pdf_content = @file_get_contents($pdf_url);

        // If fetching the PDF failed, fall back to the default PDF
        if (!$pdf_content) {
            $pdf_content = file_get_contents($default_pdf_path);
        }
    }

    // Initialize the Email class
    $email = new Email();

    // Prepare email body
    $subject = "Your Astrology Report";
    $body = "Dear " . $record['name'] . ",<br><br>Please find attached your astrology report.";

    // Set email details
    $email->setEmailDetails($record['email'], $subject, $body);

    // Add the PDF attachment
    $email->addAttachment($pdf_content, "report.pdf");

    // Send the email
    try {
        $email->send();

        // Optionally update the database
        $updateQuery = "UPDATE user_payment_information SET report_delivery = 1 WHERE id = :id";
        $updateStmt = $pdo->prepare($updateQuery);
        $updateStmt->execute(['id' => $record['id']]);
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ' . $e->getMessage();
    }
}
