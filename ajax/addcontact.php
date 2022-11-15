<?php 
    define('__CONFIG__', true);
    require_once "../inc/config.php";
    header('Content-Type: application/json');


    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $return = [];

        $usercontactid = (int)$_SESSION['user_id'];
        $contactname = (string)$_GET['contactname'];
        $notes = (string)$_GET['notes'];


        $addsql = "INSERT INTO contacts(user_contactid, contact_name, notes) VALUES(:user_contactid, :contact_name, :notes)";
        $addcontact = $con->prepare($addsql);
        $addcontact -> bindParam(':user_contactid', $usercontactid, PDO::PARAM_INT);
        $addcontact -> bindParam(':contact_name', $contactname, PDO::PARAM_STR);
        $addcontact -> bindParam(':notes', $notes, PDO::PARAM_STR);
        $addcontact->execute();
    }

    echo json_encode($return, JSON_PRETTY_PRINT); exit;
?>