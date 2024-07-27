<?php 
namespace App\Helpers;
class Utility {

    public static function dd($arg) {
        echo '<pre>';
        die(var_dump($arg));
        echo '</pre>';
        exit;
    }
}


?>