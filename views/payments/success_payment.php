
<?php 

$latitude = '28.7041';
$longitude = '77.1025';
$timezone='Asia/Kolkata';
$tzone='5.5';
//Get Lat and Lon
$geoEndpoint = 'https://json.astrologyapi.com/v1/geo_details';

$data = [
    'place' => $_SESSION['state'] // Replace with the desired place
];

$geo_details=apiCalling($geoEndpoint,$data);

    if (isset($geo_details['latitude']) && isset($geo_details['longitude'])) {
        $latitude = $geo_details['latitude'];
        $longitude = $geo_details['longitude'];
        $timezone=$geo_details['timezone_id'];
        
    } 

$tEndpoint="https://json.astrologyapi.com/v1/timezone";
$data=[
    "country_code"=>$timezone,
    "isDst"=>false
];

$timeDiff=apiCalling($tEndpoint,$data);
if($timeDiff)
{
    $tzone=$timeDiff['timezone'];
}


$endpoint = 'https://pdf.astrologyapi.com/v1/basic_horoscope_pdf';

$data = [
    'name' => $_SESSION['name'],
    'gender' => $_SESSION['gender'],
    'day' => $_SESSION['day'],
    'month' => $_SESSION['month'],
    'year' => $_SESSION['year'],
    'hour' => $_SESSION['hour'],
    'min' => $_SESSION['min'],
    'lat' => $latitude,
    'lon' => $longitude,
    'tzone' => $tzone,
];

$response = apiCalling($endpoint, $data);



if ($response) {
    $pdf = $response;

    if (isset($pdf['pdf_url'])) {
        $pdf_url = $pdf['pdf_url'];
        $pdf_content = file_get_contents($pdf_url);

        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="basic_horoscope.pdf"');
        echo $pdf_content;
    } else {
        echo 'Error: ' . $response;

        print_r($response);
    }
}

function apiCalling($endpoint,$params){
    $api_key = '632374';
    $api_secret = 'ab3fb7faf4342c0aa9e3bb4683069d09094c078b';
  
    
    $payload = json_encode($params);
    
    $headers = [
        'Authorization: Basic ' . base64_encode($api_key . ':' . $api_secret),
        'Content-Type: application/json'
    ];
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response) {
        return json_decode($response, true);
    
       
    } else {
        echo 'Failed to connect to AstrologyAPI';
        header('Location: /');
    }
}
exit();
?>

