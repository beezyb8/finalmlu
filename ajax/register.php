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

            $banks = array("Rothschild", "Moelis","Allen & Co", "Bank of America","Barclays","BMO","Centerview","Citi Bank", "Credit Suisse", "Cowen", "Deutsche Bank", "Evercore","Financo","Goldman Sachs","Greenhill","Guggenheim","Houlihan Lokey","Jefferies","JP Morgan","Lazard","LionTree","Macquarie","Mizuho","Morgan Stanley","M. Klein & Co","Perella Weinberg","Piper Sandler","PJT","Qatalyst Partners","Raine","RBC","Solomon Partners","UBS","William Blair");
            // $banksid = array("rothschild", "moelis","allen", "bofa","barclays","bmo","centerview","citi", "creditsuisse", "cowen", "deutsche", "evercore","financo","goldman","greenhill","guggenheim","houlihan","jefferies","jpm","lazard","liontree","macquarie","mizuho","morganstanley","mklein","perella","piper","pjt","qatalyst","raine","rbc","solomon","ubs","williamblair");
            $i = 1;
            foreach($banks as $value){
                $sql = "INSERT INTO bankorder(display_order, bank_name, bankid, userid) VALUES(:display_order, :bank, :bankid, :userid)";
                $createtable = $con->prepare($sql);
                $createtable -> bindParam(':display_order', $i, PDO::PARAM_INT);
                $createtable -> bindParam(':bank', $value, PDO::PARAM_STR);
                $bankid = strtolower($value);
                $bankid = str_replace(" ","",$bankid);
                $bankid = str_replace("&","",$bankid);
                $bankid = str_replace(".","",$bankid);
                $createtable -> bindParam(':bankid', $bankid, PDO::PARAM_STR);
                $createtable -> bindParam(':userid', $user_id, PDO::PARAM_INT);
                $createtable->execute();
                $i++;
            }

            $return['redirect'] = '../finalmlu/login.php?message=loginbro';
            $return['is_logged_in'] = true;


            ///THIS WILL BE THE DASHBOARD^^^^

        }
        //CREATE BANK LIST TABLE
        //Figure out, maybe go straightwe into it!

        echo json_encode($return, JSON_PRETTY_PRINT); exit;

    } else {
        exit('INVALID URL');
    }
?>