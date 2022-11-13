<?php 
    define('__CONFIG__', true);
    require_once "../inc/config.php";


    if($_SERVER['REQUEST_METHOD']=='POST'){
        header('Content-Type: application/json');
        $return = [];
        $email = $_POST['email'];


        $user_found = User::Find($email);

        if($user_found) {
            // User exists
            $return['error'] = "There is already an account registered with this email, text 15166402417";
            $return['is_logged_in'] = false;
        } else {
            // User DNE, make account
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $adduser = $con->prepare("INSERT INTO users(email, password) VALUES(LOWER(:email), :password)");
            $adduser -> bindParam(':email', $email, PDO::PARAM_STR);
            $adduser -> bindParam(':password', $password, PDO::PARAM_STR);
            $adduser->execute();

            $user_id = $con->lastInsertId();

            $_SESSION['user_id'] = (int) $user_id;

            $return['redirect'] = '../finalmlu/login.php?message=loginbro';
            $return['is_logged_in'] = true;


            ///THIS WILL BE THE DASHBOARD^^^^

        }

//make sure user dne
//make sure user can and is added
//return the proper information back to JS to redirect

        echo json_encode($return, JSON_PRETTY_PRINT); exit;

    } else {
        exit('INVALID URL');
    }
?>