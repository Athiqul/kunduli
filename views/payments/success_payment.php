
<?php 
require_once __DIR__.'/../../app/controller/Database.php';
require_once __DIR__.'/../../app/controller/Email.php';

use App\DB\Database;
use App\Email\Email;
//Filter Data for Database
//Send Email to user

$latitude = '28.7041';
$longitude = '77.1025';
$timezone='Asia/Kolkata';
$tzone='5.5';
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// die();
//Get Lat and Lon
$record=Database::getDataRecord('user_payment_information',(int)$_GET['id']);
$geoEndpoint = 'https://json.astrologyapi.com/v1/geo_details';

$data = [
    'place' => $record['place'] // Replace with the desired place
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

    
    $record['lat'] = $latitude;
    $record['lon'] = $longitude;
    $record['tzone'] = $tzone;
    $record["email"]=$_GET['email'];
    $record["mobile"] = $_GET['mobile'];
    $record["language"]=$_GET['language'];
    $record["chart_style"]= $_GET['chart'];
    $record["order_number"]=$_GET['oid'];
    $record["rp_payment_id"]=$_GET['rp_payment_id'];

    unset($record['id']);
    unset($record['created_at']);
    unset($record['updated_at']);
    unset($record['amount']);


// echo "<pre>";
// print_r($record);
// echo "</pre>";
// die();

$record=Database::updateDataRecord('user_payment_information',$record,(int)$_GET['id']);

//Sent Email
$email=new Email();
$email->setEmailDetails($_GET['email'],'Successfully premium kundli purchase done!',"<p>Expect to receive your report at your registered email address within the next 3   working days</p>",true,'Expect to receive your report at your registered email address within the next 3   working days');
$email->send();
Database::closeConnection();
header('Location : /');

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
        
    }
}
exit();
?>

