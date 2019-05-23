<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Energise-Hosting</title>
        <link rel="stylesheet" href="css/frontend.css" type="text/css">
        <link rel="stylesheet" href="css/regForm.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Callum Spiers">
        <meta name="description" content="Energised-Hosting is a web hosting company that offers a wide range of website hosting plans">
        <meta name="keywords" content="Web Hosting, Hosting, Energise-Hosting, Html, Css, javascript, PhP, Callum Spiers">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">        
        <link rel="icon" href="img/EHLogo.jpg" type="image/pjpg">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
    </head>
    <body>
        
                <!--<nav class="topnav" id="responsiveNav">
            <ul>
                <div>Icons made by <a href="https://www.flaticon.com/authors/prettycons" title="prettycons">prettycons</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                <li><img id="brandLogo" src="img/EHLogo.jpg" alt="Energise-Logo" href="/"></li>
                <li><a href="index.php">Home</a></li>
                <!--<li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Services</a>
                    <div class="dropdown-content">
                        <a href="services/small-plan.php">Small Plan</a>
                        <a href="#">Medium Plan</a>
                        <a href="#">Large Plan</a>
                    </div>
                </li>
                <li><a href="about.php">About</a></li>
                <li><a href="">Contact</a></li>
                <li class="link-right"><a href="">Register</a></li>
                <li class="link-right"><a href="">Login</a></li>
                  <li><a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                    <i class="fa fa-bars"></i>
                  </a></li>
            </ul>
        </nav>-->
        <nav class="topnav" id="responsiveNav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
                  <li><a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                    <i class="fa fa-bars"></i>
                  </a></li>
            </ul>
        </nav>
        
        <div class="welcome">
            <div class="welcome-background-contact">
            </div>
        </div>
        
<div id="LoginForm" class="modal">
  
  <form class="modal-content" action="includes/mail.php">
    <div class="imgcontainer">
      <img src="img/EHLogo.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="Fname"><b>Full Name</b></label>
      <input type="text" placeholder="Enter Full Name" name="Fname" required>

      <label for="psw"><b>E-mail</b></label>
      <input type="text" placeholder="Enter E-mail" name="email" required>
      
      <label for="subject"><b>Subject</b></label>
      <input type="text" placeholder="Enter Subject" name="subject" required>

      <label for="message"><b>Message</b></label>
      <textarea id="message" name="message" placeholder="Write something..." style="height: 200px;"></textarea>
      
      <button type="submit">Send</button>
    </div>

    <div class="container" style="background-color:#fff">
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  </form>
</div>

<script>
{
// Get the Register modal
var modal = document.getElementById('LoginForm');
}        
</script>
    </body>
</html>