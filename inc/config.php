<?php 
    if(!defined('__CONFIG__')) {
        exit('404 Gateway Error, Text 1(516)640-2417 and inform about error');
    }

    //Sessions on
    if(!isset($_SESSION)){
        session_start();
    }
    define('__ALLOWFOOTER__', true);

    include_once "classes/DB.php";
    include_once "functions.php";
    include_once "classes/user.php";
    include_once "classes/page.php";
    // include_once "classes/network.php";

    $con = DB::getconnection();
?>