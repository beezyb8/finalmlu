<?php 
    define('__CONFIG__', true);
    require_once "../inc/config.php";
    header('Content-Type: application/json');


    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $return = [];
        
        $usercontactid = (int)$_SESSION['user_id'];
        $bank = (string)$_GET['bank'];
        $contactname = (string)$_GET['contactname'];
        $notes = (string)$_GET['notes'];

        $sqlfilter = "SELECT * FROM contacts WHERE user_contactid = :user_contactid AND bank = :bank";
        $networkdata = $con->prepare($sqlfilter);
        $addcontact -> bindParam(':user_contactid', $usercontactid, PDO::PARAM_INT);
        $addcontact -> bindParam(':bank', $bank, PDO::PARAM_STR);
        $networkdata->execute();
        $return['contacts'] = $networkdata
    }
    echo json_encode($return, JSON_PRETTY_PRINT); exit;
?>