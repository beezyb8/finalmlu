<?php
    define('__CONFIG__', true);
    require_once "inc/config.php";

    Page::ForceLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navbaractual.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<?php
$user_id = (int)$_SESSION['user_id'];
$usersql = "SELECT * FROM users WHERE user_id = :user_id";
$userinfo = $con->prepare($usersql);
$userinfo->bindParam('user_id', $user_id);
$userinfo->execute();
$user = $userinfo->fetch(PDO::FETCH_ASSOC)
?>
<?php
$userid = (int)$_SESSION['user_id'];
$banksql = "SELECT * FROM bankorder WHERE userid = :userid order by display_order";
$banklist = $con->prepare($banksql);
$banklist->bindParam('userid', $userid);
$banklist->execute();
?>
<body>
    <nav class="nav_bar_sticky">
        <div class="logocont">
            <img src="../finalmlu/images/logos/mluhzltext.jpg" alt="MLU logo" class="logo">
        </div>
        <ul class="nav_cont_list">
            <li class="navbar_cont">
                <a href="dashboard.php"><i class="bi bi-house" id="dashicon"></i><br><br><p class="innernav_txt">Dashboard<p></a>
            </li>
            <li class="navbar_cont">
                <a href="timing.php"><i class="bi bi-calendar" id="dashicon"></i><br><br><p class="innernav_txt">Timing<p></a>
            </li>
            <li class="navbar_cont">
                <a href="bestpractices.php"><i class="bi bi-pass" id="dashicon"></i><br><br><p class="innernav_txt">Best Practices<p></a>
            </li>
            <li class="navbar_cont">
            <a href="accountpage.php"><i class="bi bi-gear" id="dashicon"></i><br><br><p class="innernav_txt">Your Account<p></a>
            </li>
        </ul>
    </nav>
    <div class="bodycont">
        <h1>Your Account</h1>
        <h3 class="accinfo_head">Email Address:&nbsp;&nbsp;</h3><p class="email"><?php echo $user['email']?></p><br>
        <h3 class="accinfo_head">Registration Date:&nbsp;&nbsp;</h3><p class="regdate"><?php echo $user['reg_date']?></p><br>
        <div class="banklist">
            <h3>Your Banks:</h3><p>Check off boxes to add/remove banks from your dashboard and timing page</p>
            <div class="flex_banks">
                <?php while($data = $banklist->fetch(PDO::FETCH_ASSOC)){ 
                    if($data['checked'] == 1){
                        $checked = 'checked';
                    } else{
                        $checked = '';
                    }?>
                    <span style="white-space: nowrap;" id="span_bank"><input type="checkbox"  class="checker" id="<?php echo $data['rowid'];?>" <?php echo $checked;?>><?php echo $data['bank_name'];?></span>&nbsp;&nbsp;&nbsp;&nbsp;  
                <?php } ?>
            </div>
        </div>
    </div>
    <?php require_once "inc/footer.php"; ?>
</body>
</html>