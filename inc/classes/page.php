<?php

if(!defined('__CONFIG__')) {
    exit('404 Gateway Error, Text 1(516)640-2417 and inform about error');
}

class Page{
    static function ForceLogin() {
        if(isset($_SESSION['user_id'])){
            //Acc exists process
        } else {
            //No acccount bail
            header("Location: /mlushell/finalmlu/login.php");
            exit;
        }
    }

    static function ForceToDashboard() {
        if(isset($_SESSION['user_id'])) {
            header("Location: /mlushell/finalmlu/dashboard.php");
            exit;
        } else {
            //User is good
        }
    }
}