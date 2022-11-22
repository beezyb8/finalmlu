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
    <link rel="stylesheet" href="css/test.css">
</head>
<body>
    <nav class="nav_bar_sticky">
        <div class="logocont">
            <img src="../finalmlu/images/logos/mluhzltext.jpg" alt="MLU logo" class="logo">
        </div>
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
        <table class="banklisttable">
            <tbody>
                <tr>
                    <td><p class="rothschild switch">Rothshchild</p></td>
                </tr>
                <tr>
                    <td><p class="moelis switch">Moelis</p></td>
                </tr>
                <tr>
                    <td><p class="allen switch">Allen & Co</p></td>
                </tr>
                <tr>
                    <td><p class="bofa switch">Bank of America</p></td>
                </tr>
                <!-- <tr>
                    <li class="moelis switch">
                        <p>Moelis</p>
                    </li>
                </tr>
                <tr>
                    <li class="allen switch">
                        <p>Allen & Co</p>
                    </li>
                </tr>
                <tr>
                    <li class="bofa switch">
                        <p>Bank of America</p>
                    </li>
                </tr>
                <tr>
                    <li class="deutsche switch">
                        <p>Evercore</p>
                    </li>
                </tr>
                <tr>
                    <li class="financo switch">
                        <p>Financo</p>
                    </li>
                </tr>
                <tr>
                    <li class="goldman switch">
                        <p>Goldman Sachs</p>
                    </li>
                </tr>
                <tr>
                    <li class="greenhill switch">
                        <p>Greenhill</p>
                    </li>
                </tr>
                <tr>
                    <li class="guggenheim switch">
                        <p>Guggenheim</p>
                    </li>
                </tr>
                <tr>
                    <li class="houlihan switch">
                        <p>Houlihan Lokey</p>
                    </li>
                </tr>
                <tr>
                    <li class="jefferies switch">
                        <p>Jefferies</p>
                    </li>
                </tr>
                <tr>
                    <li class="jp switch">
                        <p>JP Morgan</p>
                    </li>
                </tr>
                <tr>
                    <li class="lazard switch">
                        <p>Lazard</p>
                    </li>
                </tr>
                <tr>
                    <li class="lion switch">
                        <p>LionTree</p>
                    </li>
                </tr>
                <tr>
                    <li class="macquarie switch">
                        <p>Macquarie</p>
                    </li>
                </tr>
                <tr>
                    <li class="mizuho switch">
                        <p>Mizuho</p>
                    </li>
                </tr>
                <tr>
                    <li class="morgan switch">
                        <p>Morgan Stanley</p>
                    </li>
                </tr>
                <tr>
                    <li class="mklein switch">
                        <p>M. Klein & Co</p>
                    </li>
                </tr>
                <tr>
                    <li class="perella switch">
                        <p>Perella Weinberg</p>
                    </li>
                </tr>
                <tr>
                    <li class="piper switch">
                        <p>Piper Sandler</p>
                    </li>
                </tr>
                <tr>
                    <li class="pjt switch">
                        <p>PJT</p>
                    </li>
                </tr>
                <tr>
                    <li class="qatalyst switch">
                        <p>Qatalyst Partners</p>
                    </li>
                </tr>
                <tr>
                    <li class="raine switch">
                        <p>Raine</p>
                    </li>
                </tr>
                <tr>
                    <li class="rbc switch">
                        <p>RBC</p>
                    </li>
                </tr>
                <tr>
                    <li class="solomon switch">
                        <p>Solomon Partners</p>
                    </li>
                </tr>
                <tr>
                    <li class="ubs switch">
                        <p>UBS</p>
                    </li>
                </tr>
                <tr>
                    <li class="william switch">
                        <p>William Blair</p>
                    </li>
                </tr> -->
            </tbody>
        </table>
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
</body>
</html>