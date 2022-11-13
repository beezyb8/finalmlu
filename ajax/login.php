<?php 
    define('__CONFIG__', true);
    require_once "../inc/config.php";


    if($_SERVER['REQUEST_METHOD']=='POST'){
        // header('Content-Type: application/json');
        $return = [];

        $email = $_POST['email'];
        $password = $_POST['password'];


        $user_found = User::Find($email, true);

        if($user_found) {
            // User exists
            $user_id = (int) $user_found['user_id'];
            $hash = $user_found['password'];

            if(password_verify($password, $hash)){
                //User is in
                $return['redirect'] = '../finalmlu/dashboard.php';
                $_SESSION['user_id'] = $user_id;

            } else {
                //Invalid User
                $return['error'] = "Invalid Credentials, try again or text 15166402417";
            }
        } else {
            $return['error'] = "You do not have an account. <a href='/register.php'>Create one here</a>";

        }

//make sure user dne
//make sure user can and is added
//return the proper information back to JS to redirect

        echo json_encode($return, JSON_PRETTY_PRINT); exit;

    } else {
        exit('INVALID URL');
    }
?>