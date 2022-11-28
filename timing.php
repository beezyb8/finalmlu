<?php
    define('__CONFIG__', true);
    require_once "inc/config.php";
    echo ($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navbaractual.css">
</head>
<body>
    <nav class="nav_bar_sticky">
        <div class="logocont">
            <img src="../finalmlu/images/logos/mluhzltext.jpg" alt="MLU logo" class="logo">
        </div>
        <ul class="nav_cont_list">
            <li class="navbar_cont">
                <a href="dashboard.php">Dashboard</a>
                </li>
            <li class="navbar_cont">
                <a href="timing.php">Timing/Calendar</a>
            </li>
            <li class="navbar_cont">
                <a href="TBD">Notifications</a>
            </li>
            <li class="navbar_cont">
                <a href="bestpractices.php">Best Practices</a>
            </li>
            <li class="navbar_cont">
                <a href="../finalmlu/logout.php">Your Account</a>
            </li>
        </ul>
    </nav>
    <div class="bodycont">
    </div>
</body>
</html>