<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/frontend.css" type="text/css" />
    </head>
</html>

<body>

        <nav class="topnav" id="responsiveNav">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../about.php">About</a></li>
                <li><a href="../contact.php">Contact</a></li>
                <li><a href="../register.php">Register</a></li>
                <li><a href="../login.php">Login</a></li>
                  <li><a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                    <i class="fa fa-bars"></i>
                  </a></li>
            </ul>
        </nav>
        
        <!--<div class="welcome">
            <div class="welcome-background">
            </div>
        </div>-->
        
        <div class="thankyou_message">
            <h1>Thank You For You're Message!</h1>
            <img src="../img/EnergiseHostingBannerThankYou.jpg" alt="thank you image" style="width:300px;">
        </div>

        <?php
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $formcontent = "From: $name \n Message: $message";
            $recipient = "callumspiers01@gmail.com";
            $subject = "Energise Contact Form";
            $mailheader = "From: $email \r\n";
            mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
        ?>
</body>