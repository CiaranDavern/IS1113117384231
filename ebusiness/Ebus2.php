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
        
        
            <form action="Ebus3.php" method="POST">
                
                    <label for="card_number">Card Number: </label>
                    <input type="password" id="Card_Number" placeholder="Card Number" maxlength="16">
                    <br>
                    <label for="user_pin">PIN: </label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    <br>
                <button type="submit" class ="btn btn-dark" id="btnPurchase" disabled>Proceed with Purchase</button>
                
              
            </form>
            
            <br/>
             <a href="../homepage.html" class="btn button">Cancel Payment</a>
            <button onClick="validateDetails()" class ="btn btn-dark">Validate</button>
            <?php
            //Set session variables
            $_SESSION["total"] = $_POST["total"];
             $_SESSION["discount"] = $_POST["discount"];
            $_SESSION["vattotal"] = $_POST["vattotal"];
            $_SESSION["total"] = $_POST["total"];
            $_SESSION["fullname"] = $_POST["fullname"];
            $_SESSION["email"] = $_POST["email"];
            ?>
            
        </div>
        </center>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <div align=center
        </div>
            
            <div align="center">
        <div class="footer">
  <h3 class="mainheading">
      <a href="https://is1113117384231.herokuapp.com/" class="btn git">Live preview of project</a>
        <a href="https://github.com/CiaranDavern/IS1113117384231/graphs/commit-activity" class="btn git">Link to Graph on Github</a>
  </h3>
  </div>
    </body>
</html>
