<?php 
    define('__CONFIG__', true);
    require_once "../inc/config.php";
    header('Content-Type: application/json');    
    
    $return = [];

    $bank = "Moelis";
    $con = DB::getConnection();
    $user_contactid = 13;

    // AND bank = $bank
    $sqlfilter = "SELECT * FROM contacts WHERE user_contactid = :user_contactid AND bank = :bank";
    $networkdata = $con->prepare($sqlfilter);
    $networkdata->bindParam('user_contactid', $user_contactid);
    $networkdata->bindParam('bank', $bank);
    $networkdata->execute();
    $return['contacts'] =  $networkdata->fetchAll(PDO::FETCH_ASSOC);

    print_r($return['contacts']);

    // while($contactset = $networkdata->fetch(PDO::FETCH_ASSOC)){
    //     $return['contacts'] =  "{$contactset['contact_name']}" + "{$return['contacts']}";
    // }

    // echo $return['contacts'];
    // foreach($contactset as $row){
    //     echo " ID: " . $row['user_contactid'] . "BANK: " . $row['bank'] . "CONTACT NAME:" . $row['contact_name'] . "NOTES:" . $row['notes'] . "DATE:" . $row['date_added'] . $row['contact_id'];
    // }
?>