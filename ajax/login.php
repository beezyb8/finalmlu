<?php 
    define('__CONFIG__', true);
    require_once "../inc/config.php";


    if($_SERVER['REQUEST_METHOD']=='POST'){
        // header('Content-Type: application/json');
        $return = [];

        $email = $_POST['email'];
        $password = $_POST['password'];

        $findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
        $findUser->bindParam(':email',$email, PDO::PARAM_STR);
        $findUser->execute();

        if($findUser -> rowCount() == 1) {
            // User exists
            $User = $findUser->fetch(PDO::FETCH_ASSOC);
            $user_id = (int) $User['user_id'];
            $hash = $User['password'];

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