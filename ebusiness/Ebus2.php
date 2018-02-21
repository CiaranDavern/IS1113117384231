<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <ul>
  <li><a class="btnProceed" href="../homepage.html">Home</a></li>
  <li><a class="btnProceed"  href="/Interests/Cloud.html">Interests</a></li>
  <li><a class="btnProceed"  href="/ebusiness/Ebus1.php">E Business</a></li>
  <li><a class="btnProceed"  href="/cv_page1.html">CV pages</a></li>
</ul>
        
    </head>
    <body>
        <center>
        <div class="header">
  <h1 class="mainheading">Payment Page</h1>
</div>
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST"">
                     <label for="fullname">
                Full Name:
                <input type="text" id="fullname" name="fullname">
            </label>
            <label for="email">
                Email:
                <input type="text" id="email" name="email">
            </label>
                    <label for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

                <button type="submit" class ="btnProceed" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()" class ="btnProceed">Validate</button>
            <?php
            //Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
            
        </div>
        </center>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <div align=center
        <a href="/homepage.html" class="btn button">Home</a>
        </div>
    </body>
</html>
