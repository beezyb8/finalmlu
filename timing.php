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
    <link rel="stylesheet" href="css/timing.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
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
        <div class="display_nav">
            <span class="change" id="colds"><i class="bi bi-envelope" id="dashicon"></i> Cold Emails</span>
            <span class="change" id="calls_had"><i class="bi bi-phone" id="dashicon"></i> Calls Had</span>
            <span class="change" id="apps"><i class="bi bi-file-earmark" id="dashicon"></i> Applicatios</span>
        </div>
        <div class="contcont_body">
            <div class="cont_body">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                Yo
            </div>
        </div>
    </div>
</body>
</html>