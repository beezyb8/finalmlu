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
    <link rel="stylesheet" href="css/networktable.css">
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
                <a href="timing.php">Your Nate!</a>
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
            <li class="rothschild switch">
                <p>Rothshchild</p>
            </li>
            <li class="moelis switch">
                <p>Moelis</p>
            </li>
            <li class="allen switch">
                <p>Allen & Co</p>
            </li>
            <li class="bofa switch">
                <p>Bank of America</p>
            </li>
            <li class="barclays switch">
                <p>Barclays</p>
            </li>
            <li class="bmo switch">
                <p>BMO</p>
            </li>
            <li class="centerview switch">
                <p>Centerview</p>
            </li>
            <li class="citi switch">
                <p>Citi Bank</p>
            </li>
            <li class="credit switch">
                <p>Credit Suisse</p>
            </li>
            <li class="cowen switch">
                <p>Cowen</p>
            </li>
            <li class="deutsche switch">
                <p>Deutsche Bank</p>
            </li>
            <li class="deutsche switch">
                <p>Evercore</p>
            </li>
            <li class="financo switch">
                <p>Financo</p>
            </li>
            <li class="goldman switch">
                <p>Goldman Sachs</p>
            </li>
            <li class="greenhill switch">
                <p>Greenhill</p>
            </li>
            <li class="guggenheim switch">
                <p>Guggenheim</p>
            </li>
            <li class="houlihan switch">
                <p>Houlihan Lokey</p>
            </li>
            <li class="jefferies switch">
                <p>Jefferies</p>
            </li>
            <li class="jp switch">
                <p>JP Morgan</p>
            </li>
            <li class="lazard switch">
                <p>Lazard</p>
            </li>
            <li class="lion switch">
                <p>LionTree</p>
            </li>
            <li class="macquarie switch">
                <p>Macquarie</p>
            </li>
            <li class="mizuho switch">
                <p>Mizuho</p>
            </li>
            <li class="morgan switch">
                <p>Morgan Stanley</p>
            </li>
            <li class="mklein switch">
                <p>M. Klein & Co</p>
            </li>
            <li class="perella switch">
                <p>Perella Weinberg</p>
            </li>
            <li class="piper switch">
                <p>Piper Sandler</p>
            </li>
            <li class="pjt switch">
                <p>PJT</p>
            </li>
            <li class="qatalyst switch">
                <p>Qatalyst Partners</p>
            </li>
            <li class="raine switch">
                <p>Raine</p>
            </li>
            <li class="rbc switch">
                <p>RBC</p>
            </li>
            <li class="solomon switch">
                <p>Solomon Partners</p>
            </li>
            <li class="ubs switch">
                <p>UBS</p>
            </li>
            <li class="william switch">
                <p>William Blair</p>
            </li>
        </ul>
    </div>
    <div class="bank_info_cont">
        <h3 class="bank_name" id="bankname">BANK NAME</h3>
        <img src="../finalmlu/images/logos/mlunotext.jpg" alt="Bank Logo" class="banklogo">
        <div class="spacer"></div>
        <h6 id="item_title" class="toptitle">Bank Description</h6>
        <p id="writeup">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi mollitia eos fugit ut vero aliquid soluta sed, alias iste ipsam non labore necessitatibus voluptatum, saepe, ex amet in! Velit.</p>
        <h6 id="item_title" class="bottomtitle">Bank Interview Process</h6>
        <p id="interviewsum">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi mollitia eos fugit ut vero aliquid soluta sed, alias iste ipsam non labore necessitatibus voluptatum, saepe, ex amet in! Velit.</p>
        <h6 id="emailformat">gang@gmail.com</h6>
        <div class="nocontacts">No Contacts!</div>
        <table class="nworktable">
            <tr>
                <th class="contacttitle">Contact Name</th>
                <th class="notestitle">Notes</th>
                <th class="notestitle"><p class="checkboxhead">Cold Email</p></th>
                <th class="notestitle"><p class="checkboxhead">Call Set</p></th>
                <th class="notestitle"><p class="checkboxhead">Call Had</p></th>
                <th class="notestitle"><p class="checkboxhead">Thank You</p></th>
            </tr>
            <tbody class="table_body">
            </tbody>
        </table>
        <button class="newcontact">Add new contact</button>
        <br>
        <div class="contactmodal">
            <form class = "js-add-contact">
                <label class="contact-name-header" for="form-stacked-text">Contact Name</label>
                <div class="contact-name-bin">
                    <input class="contact-name-input" id="conname" type="text" placeholder="John Smith" required="required">
                </div>
                <div class="submit-bin">
                    <button class="submit-button">Add Contact</button>
                </div>
            </form>
            <button type="" class="closemodal">Close Window</button>
        </div>
    </div>
    <?php require_once "inc/footer.php"; ?>
    <script src='../finalmlu/assets/js/network.js'></script>
</body>
</html>

<!-- DELETED MODAL TO ADD CONTACT BY BANK -->