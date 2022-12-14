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
<?php
$userid = (int)$_SESSION['user_id'];
$banksql = "SELECT * FROM bankorder WHERE userid = :userid order by display_order";
$getbankshit = $con->prepare($banksql);
$getbankshit->bindParam('userid', $userid);
$getbankshit->execute();
?>
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
        <table class="banklisttable" id="banklist">
            <tbody class="row_position">
            <?php while($data = $getbankshit->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr id="<?php echo $data["rowid"]?>">
                    <td class="switch" id="<?php echo $data['bankid'];?>"><?php echo $data['bank_name'];?></td>
                </tr>
            <?php } ?>
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
    <?php require_once "inc/footer.php"; ?>
</body>
</html>