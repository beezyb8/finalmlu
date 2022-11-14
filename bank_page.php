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
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
    <nav class="nav_bar_sticky">
        <ul class="nav_cont_list">
            <li class="navbar_cont">
                <a href="bank_page.php">Bank Page</a>
                </li>
            <li class="navbar_cont">
                <a href="TBD">Expanded Netowrking Table</a>
            </li>
            <li class="navbar_cont">
                <a href="TBD">Notifications</a>
            </li>
            <li class="navbar_cont">
                <a href="TBD">About Us</a>
            </li>
        </ul>
    </nav>
    <div class="bank_list_cont">
        <ul class="bank_list">
            <li class="rothschild">
                <a href="">Rothshcild</a>
            </li>
            <li class="moelis">
                <a href="">Moelis</a>
            </li>
            <li class="allen">
                <a href="">Allen & Co</a>
            </li>
            <li class="bofa">
                <a href="">Bank of America</a>
            </li>
            <li class="barclays">
                <a href="">Barclays</a>
            </li>
            <li class="bmo">
                <a href="">BMO</a>
            </li>
            <li class="centerview">
                <a href="">Centerview</a>
            </li>
            <li class="citi">
                <a href="">Citi Bank</a>
            </li>
            <li class="credit">
                <a href="">Credit Suisse</a>
            </li>
            <li class="cowen">
                <a href="">Cowen</a>
            </li>
            <li class="deutsche">
                <a href="">Deutsche Bank</a>
            </li>
            <li class="deutsche">
                <a href="">Evercore</a>
            </li>
            <li class="financo">
                <a href="">Financo</a>
            </li>
            <li class="goldman">
                <a href="">Goldman Sachs</a>
            </li>
            <li class="greenhill">
                <a href="">Greenhill</a>
            </li>
            <li class="guggenheim">
                <a href="">Guggenheim</a>
            </li>
            <li class="houlihan">
                <a href="">Houlihan Lokey</a>
            </li>
            <li class="jefferies">
                <a href="">Jefferies</a>
            </li>
            <li  class="jp">
                <a href="">JP Morgan</a>
            </li>
            <li class="lazard">
                <a href="">Lazard</a>
            </li>
            <li class="lion">
                <a href="">LionTree</a>
            </li>
            <li class="macquarie">
                <a href="">Macquarie</a>
            </li>
            <li class="mizuho">
                <a href="">Mizuho</a>
            </li>
            <li class="morgan">
                <a href="">Morgan Stanley</a>
            </li>
            <li class="mklein">
                <a href="">M. Klein & Co</a>
            </li>
            <li class="perella">
                <a href="">Perella Weinberg</a>
            </li>
            <li class="piper">
                <a href="">Piper Sandler</a>
            </li>
            <li class="pjt">
                <a href="">PJT</a>
            </li>
            <li class="qatalyst">
                <a href="">Qatalyst Partners</a>
            </li>
            <li class="raine">
                <a href="">Raine</a>
            </li>
            <li class="rbc">
                <a href="">RBC</a>
            </li>
            <li class="solomon">
                <a href="">Solomon Partners</a>
            </li>
            <li class="ubs">
                <a href="">UBS</a>
            </li>
            <li class="william">
                <a href="">William Blair</a>
            </li>
        </ul>
    </div>
    <div class="bank_info_cont">
        <p class="bank_name" id="bankname">BANK NAME</p>
        <h6>BANK DESCRIPTION</h6>
        <p id="writeup">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi mollitia eos fugit ut vero aliquid soluta sed, alias iste ipsam non labore necessitatibus voluptatum, saepe, ex amet in! Velit.</p>
        <h6>BANK INTERVIEW PROCESS</h6>
        <p id="interviewsum">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi mollitia eos fugit ut vero aliquid soluta sed, alias iste ipsam non labore necessitatibus voluptatum, saepe, ex amet in! Velit.</p>
        <h6 id="emailformat">gang@gmail.com</h6>
        <h6>Networking Table</h6>
    </div>

    <?php require_once "inc/footer.php"; ?>
</body>
</html>