<?php
    define('__CONFIG__', true);
    require_once "inc/config.php";

    Page::ForceLogin();
    $User = new User($_SESSION['user_id']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Hello <?php echo $User->email; ?> you registered at <?php echo $User->reg_date;?></p>
    <a href="logout.php">Click Here to logout</a>
</body>
</html>