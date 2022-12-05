<?php 
    define('__CONFIG__', true);
    require_once "../inc/config.php";
    header('Content-Type: application/json');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $return = [];

        $check = (int)$_POST['check'];
        $rowid = (int)$_POST['rowid'];

        $sqlup = "UPDATE bankorder SET checked = $check WHERE rowid = $rowid";
        $checked = $con->prepare($sqlup);
        $checked->bindParam('rowid', $rowid);
        $checked->execute();
        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    }
?>