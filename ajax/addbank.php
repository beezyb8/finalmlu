<?php 
    define('__CONFIG__', true);
    require_once "../inc/config.php";


    if($_SERVER['REQUEST_METHOD']=='POST'){
        header('Content-Type: application/json');
        $return = [];

        $user_id = (int)$_SESSION['user_id'];
        $bank = (string)$_POST['bank'];
        $bankid = (string)$_POST['bankid'];
        $displayorder = (string)$_POST['displayrank'];



        $sql = "INSERT INTO bankorder(display_order, bank_name, bankid, userid) VALUES(:display_order, :bank, :bankid, :userid)";
        $insertbank = $con->prepare($sql);
        $insertbank -> bindParam(':display_order', $displayorder, PDO::PARAM_INT);
        $insertbank -> bindParam(':bank', $bank, PDO::PARAM_STR);
        $insertbank -> bindParam(':bankid', $bankid, PDO::PARAM_STR);
        $insertbank -> bindParam(':userid', $user_id, PDO::PARAM_INT);
        $insertbank->execute();

        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    }

