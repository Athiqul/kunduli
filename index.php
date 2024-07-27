<?php
//echo "HI";
require 'vendor/autoload.php';
use App\Helpers\Utility;
//Check request uri
$requestUri=$_SERVER['REQUEST_URI'];
//Utility::dd($requestUri);
require_once __DIR__ .'/route/web.php';

?>