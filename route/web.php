<?php 

use App\Helpers\Utility;
//Check request uri
$requestUri=$_SERVER['REQUEST_URI'];

if($requestUri=='/')
{
   // Utility::dd("hi");
    require_once __DIR__.'/../views/home.php';
}else if($requestUri=='/user-name')
{
    require_once __DIR__.'/../views/form/form_name.php';
}else if($requestUri=='/user-gender')
{
    require_once __DIR__.'/../views/form/form_gender.php';
}else if($requestUri=='/user-birthdate')
{
    require_once __DIR__.'/../views/form/form_date.php';
}else if($requestUri=='/user-birthtime')
{
    require_once __DIR__.'/../views/form/form_time.php';
}else if($requestUri=='/user-birthplace')
{
    require_once __DIR__.'/../views/form/form_place.php';
}else {
    http_response_code(404);
    require_once __DIR__.'/views/404.php';
    exit();
}


?>