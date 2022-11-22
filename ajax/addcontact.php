<?php 
    define('__CONFIG__', true);
    require_once "../inc/config.php";
    header('Content-Type: application/json');


    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $return = [];

        $usercontactid = (int)$_SESSION['user_id'];
        $contactname = (string)$_POST['contactname'];
        $notes = '';
        $bank = (string)$_POST['bank'];


        $addsql = "INSERT INTO contacts(user_contactid, contact_name, notes, bank) VALUES(:user_contactid, :contact_name, :notes, :bank)";
        $addcontact = $con->prepare($addsql);
        $addcontact -> bindParam(':user_contactid', $usercontactid, PDO::PARAM_INT);
        $addcontact -> bindParam(':contact_name', $contactname, PDO::PARAM_STR);
        $addcontact -> bindParam(':notes', $notes, PDO::PARAM_STR);
        $addcontact -> bindParam(':bank', $bank, PDO::PARAM_STR);
        $addcontact->execute();

        // AND bank = $bank
        $sqlfilter = "SELECT * FROM contacts WHERE user_contactid = :user_contactid AND bank = :bank";
        $networkdata = $con->prepare($sqlfilter);
        $networkdata->bindParam('user_contactid', $usercontactid);
        $networkdata->bindParam('bank', $bank);
        $networkdata->execute();
        $return['contacts'] = $networkdata->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    }
?>