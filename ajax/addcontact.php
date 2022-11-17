<?php 
    define('__CONFIG__', true);
    require_once "../inc/config.php";
    header('Content-Type: application/json');


    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $return = [];

        $usercontactid = (int)$_SESSION['user_id'];
        $contactname = (string)$_POST['contactname'];
        $notes = (string)$_POST['notes'];
        $bank = (string)$_POST['bank'];


        $addsql = "INSERT INTO contacts(user_contactid, contact_name, notes, bank) VALUES(:user_contactid, :contact_name, :notes, :bank)";
        $addcontact = $con->prepare($addsql);
        $addcontact -> bindParam(':user_contactid', $usercontactid, PDO::PARAM_INT);
        $addcontact -> bindParam(':contact_name', $contactname, PDO::PARAM_STR);
        $addcontact -> bindParam(':notes', $notes, PDO::PARAM_STR);
        $addcontact -> bindParam(':bank', $bank, PDO::PARAM_STR);
        $addcontact->execute();

        $sqlfilter = "SELECT * FROM contacts WHERE user_contactid = :user_contactid AND bank = :bank";
        $networkdata = $con->prepare($sqlfilter);
        $networkdata -> bindParam(':user_contactid', $usercontactid, PDO::PARAM_INT);
        $networkdata -> bindParam(':bank', $bank, PDO::PARAM_STR);
        $networkdata->execute();

        // $return['contacts'] = $new;
        // echo json_encode($return, JSON_PRETTY_PRINT); exit;

        if ($networkdata->rowCount()>0) {
            $return['contacts'] = "yoooo";
            echo json_encode($return, JSON_PRETTY_PRINT); exit;
        } else{
            $return['contacts'] = "yo";
            echo json_encode($return, JSON_PRETTY_PRINT); exit;
        }
    }
?>