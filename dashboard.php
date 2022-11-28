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
    <div class="bank_list_cont">
        <table class="banklisttable" id="banklist">
            <tbody class="row_position">
            <?php while($data = $getbankshit->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr id="<?php echo $data["rowid"]?>">
                    <td class="switch" id="<?php echo $data['bankid'];?>" value="<?php echo $data['bank_name'];?>"><?php echo $data['bank_name'];?></td>
                </tr>
            <?php } ?>
                <tr>

                    <td class="addbank" id=""><p class="addbankp">Create A Company Page We Don't Have</p>
                        <div class="addbankcont">
                            <form class="addbankform">
                                <label class="addbankname" id="compname">Company Name</label><br>
                                <input class="companyname" id="compname"><br>
                                <button class="submit" id="compname">Add Comp</button><br>
                            </form>
                            <button class="exitaddform" id="compname">Exit</button><br>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="bank_info_cont">
        <h3 class="bank_name" id="bankname">Welcome To My Leg Up</h3>
        <img src="../finalmlu/images/logos/mlunotext.jpg" alt="Bank Logo" class="banklogo">
        <div class="homepage">
            <p>Key features of this platform include</p>
            <ul>
                <li>Bank write-ups for each bank based on interviews with employees/interns at those banks</li>
                <li>A notes section for each bank</li>
                <li>Networking tables that you can access for each bank with markers to stay organized</li>
                <li>You can reorganize the banks on the left to fit your personal rankings by dragging the tabs up/down</li>
                <li>You can add a bank or company we don't have at the bottom of the bank list on the left</li>
                <li>To get back to this page just refresh the page</li>
            </ul>
        </div>
        <div class="spacer"></div>
        <div class="notescont">
            <h6 id="item_title" class="notestitle">Your Notes:</h6>
            <div class="banknotescont"><textarea class="banknotes"></textarea></div>
        </div>
        <div class="writtencont">
            <h6 id="item_title" class="toptitle">Bank Description</h6>
            <p id="writeup">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi mollitia eos fugit ut vero aliquid soluta sed, alias iste ipsam non labore necessitatibus voluptatum, saepe, ex amet in! Velit.</p>
            <h6 id="item_title" class="bottomtitle">Bank Interview Process</h6>
            <p id="interviewsum">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi mollitia eos fugit ut vero aliquid soluta sed, alias iste ipsam non labore necessitatibus voluptatum, saepe, ex amet in! Velit.</p>
            <h6 id="emailformat">gang@gmail.com</h6>
        </div>
        <div class="contactcont">
            <div class="nocontacts">No Contacts!</div>
            <table class="nworktable">
                <tr>
                    <th class="contacttitle">Contact Name<br><button class="editcontbtn">Edit</button></th>
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
        </div>
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
    <!-- Need a footer or space on bottom of the page -->
    <?php require_once "inc/footer.php"; ?>
    <script src='../finalmlu/assets/js/editcontact.js'></script>
</body>
</html>

<!-- DELETED MODAL TO ADD CONTACT BY BANK -->