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
    <link rel="stylesheet" href="css/dashbody.css">
    <link rel="stylesheet" href="css/networktable.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
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
    <div class="bank_list_cont">
        <table class="banklisttable" id="banklist">
            <tbody class="row_position">
            <?php while($data = $getbankshit->fetch(PDO::FETCH_ASSOC)){ 
                if($data['checked'] == 1){
                    $display = "";
                } else{
                    $display = "display: none";
                }?>
                <tr id="<?php echo $data["rowid"]?>" style="<?php echo $display;?>">
                    <td class="switch" id="<?php echo $data['bankid'];?>" value="<?php echo $data['bank_name'];?>"><?php echo $data['bank_name'];?><i class="bi bi-arrows-expand" id="arrows"></i></td>
                </tr>
            <?php } ?>
                <tr>

                    <td class="addbank" id=""><p class="addbankp">Add Bank</p>
                        <div class="addbankcont">
                            <form class="addbankform">
                                <label class="addbankname" id="compname">Company Name</label><br>
                                <input class="companyname" id="compname"><br>
                                <button type="submit" class="submit bi bi-plus-square bankaddsub" id="compname"></button>
                                <button type="button" class="exitaddform bi bi-x-square bankaddexit" id="compname"></button><br>
                                <!-- STYLE^^ -->
                            </form>
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
        <div class="app_cont">
                <form class="applinks">
                    <h3 id="app_link">Application Link: </h3><input type="text"><br>
                    <h3 id="app_due_date">Due Date: </h3><input type="date"><br>
                    <button type="submit">Confrim</button>
                </form>
            </div>
        <div class="contactcont">
            <div class="nocontacts">No Contacts!</div>
            <table class="nworktable">
                <thead class="nworkhead">
                    <tr>
                        <th class="contact_title">Contact Name<br><button class="editcontbtn bi bi-pencil-square" id="editbtnid"> Edit</button></th>
                        <th class="notes_tit">Notes</th>
                        <th class="coldtitle"><p class="checkboxhead">Cold Email</p></th>
                        <th class="calltitle"><p class="checkboxhead">Call Set</p></th>
                        <th class="hadtitle"><p class="checkboxhead">Call Had</p></th>
                        <th class="tytitle"><p class="checkboxhead">Thank You</p></th>
                    </tr>
                </thead>
                <tbody class="table_body">
                </tbody>
            </table><br>
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