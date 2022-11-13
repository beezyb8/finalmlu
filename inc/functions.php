<?php
//Force user to login page if no user
    function ForceLogin() {
        if(isset($_SESSION['user_id'])){
            //Acc exists process
        } else {
            //No acccount bail
            header("Location: /mlushell/finalmlu/login.php");
            exit;
        }
    }

    function ForceToDashboard() {
        if(isset($_SESSION['user_id'])) {
            header("Location: /mlushell/finalmlu/dashboard.php");
            exit;
        } else {
            //User is good
        }
    }
?>