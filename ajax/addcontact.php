<?php 
    define('__CONFIG__', true);
    require_once "../inc/config.php";


    if($_SERVER['REQUEST_METHOD']=='POST'){
        // header('Content-Type: application/json');
        $return = [];

        $contact_name = $_POST['name'];
        $notes = $_POST['notes'];

        $addcontact = $con->prepare("INSERT INTO contacts(user_id, contact_name, notes) VALUES(:contact_name, :password)");
        $addcontact -> bindParam(':email', $email, PDO::PARAM_STR);
        $addcontact -> bindParam(':password', $password, PDO::PARAM_STR);
        $addcontact->execute();
    }

////UNDERSTAND????/