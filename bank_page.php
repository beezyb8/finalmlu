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
                <a href="contact.php">Network Table Manager</a>
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
                <p class="gang">Rothshcild</p>
            </li>
            <li class="moelis">
                <p>Moelis</p>
            </li>
            <li class="allen">
                <p>Allen & Co</p>
            </li>
            <li class="bofa">
                <p>Bank of America</p>
            </li>
            <li class="barclays">
                <p>Barclays</p>
            </li>
            <li class="bmo">
                <p>BMO</p>
            </li>
            <li class="centerview">
                <p>Centerview</p>
            </li>
            <li class="citi">
                <p>Citi Bank</p>
            </li>
            <li class="credit">
                <p>Credit Suisse</p>
            </li>
            <li class="cowen">
                <p>Cowen</p>
            </li>
            <li class="deutsche">
                <p>Deutsche Bank</p>
            </li>
            <li class="deutsche">
                <p>Evercore</p>
            </li>
            <li class="financo">
                <p>Financo</p>
            </li>
            <li class="goldman">
                <p>Goldman Sachs</p>
            </li>
            <li class="greenhill">
                <p>Greenhill</p>
            </li>
            <li class="guggenheim">
                <p>Guggenheim</p>
            </li>
            <li class="houlihan">
                <p>Houlihan Lokey</p>
            </li>
            <li class="jefferies">
                <p>Jefferies</p>
            </li>
            <li  class="jp">
                <p>JP Morgan</p>
            </li>
            <li class="lazard">
                <p>Lazard</p>
            </li>
            <li class="lion">
                <p>LionTree</p>
            </li>
            <li class="macquarie">
                <p>Macquarie</p>
            </li>
            <li class="mizuho">
                <p>Mizuho</p>
            </li>
            <li class="morgan">
                <p>Morgan Stanley</p>
            </li>
            <li class="mklein">
                <p>M. Klein & Co</p>
            </li>
            <li class="perella">
                <p>Perella Weinberg</p>
            </li>
            <li class="piper">
                <p>Piper Sandler</p>
            </li>
            <li class="pjt">
                <p>PJT</p>
            </li>
            <li class="qatalyst">
                <p>Qatalyst Partners</p>
            </li>
            <li class="raine">
                <p>Raine</p>
            </li>
            <li class="rbc">
                <p>RBC</p>
            </li>
            <li class="solomon">
                <p>Solomon Partners</p>
            </li>
            <li class="ubs">
                <p>UBS</p>
            </li>
            <li class="william">
                <p>William Blair</p>
            </li>
        </ul>
    </div>
    <div class="bank_info_cont">
        <h3 class="bank_name" id="bankname">BANK NAME</h3>
        <h6 id="item_title">BANK DESCRIPTION</h6>
        <p id="writeup">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi mollitia eos fugit ut vero aliquid soluta sed, alias iste ipsam non labore necessitatibus voluptatum, saepe, ex amet in! Velit.</p>
        <h6 id="item_title">BANK INTERVIEW PROCESS</h6>
        <p id="interviewsum">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi mollitia eos fugit ut vero aliquid soluta sed, alias iste ipsam non labore necessitatibus voluptatum, saepe, ex amet in! Velit.</p>
        <h6 id="emailformat">gang@gmail.com</h6>
        <h6>Networking Table</h6>
        <button class="newcontact">Add new contact</button>
        <br>
        <div class="contactmodal">
            <form class = "js-add-contact">
                <label class="contact-name-header" for="form-stacked-text">Contact Name</label>
                <div class="contact-name-bin">
                    <input class="contact-name-input" name="name" type="text" placeholder="John Smith" required="required">
                </div>
                <label class="contact-pos-header" for="form-stacked-text">Position</label>
                <div class="contact-pos-bin">
                    <input class="contact-pos-input" name="position" type="text" placeholder="Analyst">
                </div>
                <button type="submit">Add Contact</button>
                <button type="submit" class="closemodal">Close Window</button>
            </form>
        </div>
    </div>
    <?php require_once "inc/footer.php"; ?>
</body>
</html>

<!-- DELETED MODAL TO ADD CONTACT BY BANK -->