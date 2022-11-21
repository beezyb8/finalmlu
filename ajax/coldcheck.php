<?php 
    define('__CONFIG__', true);
    require_once "../inc/config.php";
    header('Content-Type: application/json');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $return = [];

        $coldchecker = (int)$_POST['coldcheck'];
        $contactid = (int)$_POST['contactid'];

        $sqlfilter = "UPDATE contacts SET coldemail = $coldchecker WHERE contact_id = $contactid";
        $networkdata = $con->prepare($sqlfilter);
        $networkdata->bindParam('contact_id', $contactid);
        $networkdata->execute();

        $sqlfilter2 = "SELECT * FROM contacts WHERE contact_id = $contactid";
        $networkdata = $con->prepare($sqlfilter2);
        $networkdata->bindParam('contact_id', $contactid);
        $networkdata->execute();
        $return['thiscontact'] = $networkdata->fetch(PDO::FETCH_ASSOC);
        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    }
?>