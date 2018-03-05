<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
     <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
    <head>
        <title>Receipt</title>
        <center>
<center>  
 <ul>
  <li><a href="../homepage.html">Home</a></li>
  <li><a href="Interests/sports.html">Interests</a></li>
  <li><a href="/ebusiness/Ebus1.php">E Business</a></li>
  <li><a href="/cv_page1.html">CV pages</a></li>
</ul>
</center>
            <div class="header">
  <h1 class="mainheading">Receipt</h1>
</div>
        
        
    </head>
    <body>
        <style>
            p{
                font-size: 24px;
            }
        </style>
        <p>
        <?php
        //Echo session variables that were set on previous page
        echo "Full name is " . $_SESSION["fullname"] . ".";
        echo "<br>";
        echo "Email address is " . $_SESSION["email"] . ".";
        echo "<br>";
        echo "Total is $" . $_SESSION["total"] . ".";
        echo "<br>";
        echo "Discount Total is $" . $_SESSION["discount"] . ".";
        echo "<br>";
        echo "VAT Total is $" . $_SESSION["vattotal"] . ".";
        ?>
        <p>Order Number: </p>
        <p id="one">Order number: </p>
        <script>
 function random(){

document.getElementById("one").innerHTML =Math.floor(Math.random() * 100000);
}
window.onload = random();
</script>
        </p>
        <br>
        <div>
            <center>
            <a href="https://www.facebook.com">
            <img src="/ebusiness/facebook-Logo.jpg" 
            alt="facebook picture" width="8%" height="8%" class="picture">
            </a>
            <a href="https://www.linkedin.com/">
            <img src="/ebusiness/linkedin-inbug-2crev.png" 
            alt="linkedin picture" width="8%" height="8%" class="picture">
            </a>
            <a href="">
            <img src="/ebusiness/instagram-logo-png-transparent-background.png" 
            alt="instagram picture" width="8%" height="8%" class="picture">
            </a>
            </center>
        </div>
        <br>
        <p> Follow and like us across all our social media platforms for more news on cloud services!</p>
        <a href="../homepage.html" class="btn button">Home</a>
         <script type="text/javascript" src="ebus2_validator.js"></script>
    </body>
    </center>
</html>