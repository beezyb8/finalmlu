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
    <link rel="stylesheet" href="css/bestpractices.css">
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
                <a href="bestpractices.php"><i class="bi bi-pass" id="dashicon"></i><br><br><p class="innernav_txt">Best Practices<p></a>
            </li>
            <li class="navbar_cont">
            <a href="bestpractices.php"><i class="bi bi-gear" id="dashicon"></i><br><br><p class="innernav_txt">Your Account<p></a>
            </li>
        </ul>
    </nav>
    <div class="bodycont">
        <div class="header">
            <h1>Our Perceived Best Practices</h1>
            <p><b>This advice was gathered and put together through personal experience, research, and interviews.</b></p>
        </div>
        <div class="pagelinks">
            <ul class="pagelinks_cont">
                <li class="changecont" id="gennw">
                    <p class="sectiontab">Gereral<br>Networking</p>
                </li><li class="changecont" id="sendemails">
                    <p class="sectiontab">Email<br>Management</p>
                </li><li class="changecont" id="compres">
                    <p class="sectiontab">Company<br>Presentations</p>
                </li><li class="changecont" id="behav">
                    <p class="sectiontab">Behavioral<br>Interviews</p>
                </li><li class="changecont" id="techint">
                    <p class="sectiontab">Technical<br>Interviews</p>
                </li><li class="changecont" id="formats">
                    <p class="sectiontab">Formats +<br>Resources</p>
                </li>
            </ul>
        </div>
        <div class="body">
            <div class="gennwcont">
                <h1 class="section_header">General Networking Tips</h1>
                <h3>How To Get Calls:</h3>
                <p>The best shot you have at getting a networking phone call from a cold email is by having any kind of connection to them. Both having gone to UMich is a perfect connection to leverage.  Use the screening feature on LinkedIn to find people who went to UMich and are at the bank you are trying to network with. One good practice during recruiting is to spend a couple hours at the start of each week finding people and schedule sending emails to them asking for networking calls. For reference, schedule send is a feature on google mail that allows you to set a future send time to any email. Schedule send is your friend because if you’re up at 11PM finding these people, it’s unprofessional to send those emails late at night. Use odd times in the morning like 8:12 or 9:03 to schedule send, because the traditional 8:00 on the dot email basically tells them you’re schedule sending. However, if you are schedule sending, make sure to be awake during the time it sends. This way, if they respond immediately after it sends, you can respond back and potentially get a quick phone call out of it. Another good practice is to send a majority of your reaching out emails on Tuesdays. That way, you have plenty of time that week to schedule a call, but their inbox isn’t swamped from the weekend and/or busy Mondays.</p>
                <h3>Why Network:</h3>
                <p>The goal of networking should be to have your name become recognizable at the firms you like. Some banks' recruiting processes have analysts select certain candidates stuck out to them when networking, which is one part of how interviews are decided. Because of this, oftentimes the quality is more important than the quantity of calls, however quantity is never a bad thing. At your top firms, trying to speak to 3-6 people, but it should all be dependent on how well you think the calls went. For your other firms, try to reach 3 calls. The thing about getting interviews, though, is that some people with 1 call will get it over someone with 4. It’s a crap shoot, but by having more calls and more people who know you at the firm, you put yourself in a better position to get one. Be strategic with your time, however. It is definitely better to have 3 calls at 8 banks than 1 or 2  calls at 16.</p>
                <h3>How to Network:</h3>
                <p>Networking calls mainly test your ability to speak with others. Last year, I met an analyst who told me something on the lines of, “being personable and being able to have genuine conversations with others is half the battle in this process.” During networking calls, be sure to ask genuine questions about analysts’s lives and jobs. Although the process seems superficial and that networking is just a check the box, developing one genuine connection at a bank is a big help. They can help you from the inside and give you advice throughout the process which is huge. During phone calls, it is common practice to spend the first 5ish minutes with some small talk: talking about my/their day/week so far. When the conversation fades, say something along the lines of, “look, thanks for taking the time to talk with me today, I really appreciate it. I’d love to hear a little bit about your story: where you’re from, your time in college, why you chose banking” - stuff along those lines. This way, they tell a story about their lives, and you can ask questions to branch off their story. Especially when they talk about their time at their firm, make sure to ask some questions about deal experience, company culture, and stuff like that to show interest in their job. Finally, it’s a good practice to end the call asking about what they like to do outside of work, to discover more about their interests, hobbies, etc. Aim to speak for around 25-30 minutes, but some calls go shorter or longer naturally. Always remember to send a thank you email later that day if the call is in the morning, or the next day if the call was in the afternoon.</p>
            </div>
            <div class="">
                <h1 class="section_header">Sending Emails</h1>
                
            </div>
        </div>
    </div>
</body>
</html>