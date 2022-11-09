<?php 
    define('__CONFIG__', true);
    require_once "../inc/config.php";


    if($_SERVER['REQUEST_METHOD']=='POST'){
        header('Content-Type: application/json');
        $return = [];

//make sure user dne
//make sure user can and is added
//return the proper information back to JS to redirect
        $return['redirect'] = '../finalmlu/login.php';

        echo json_encode($return, JSON_PRETTY_PRINT); exit;


    } else {
        exit('test');
    }
?>