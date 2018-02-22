<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
     <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
    <head>
        <title>Receipt</title>
        <center>
            <div class="header">
  <h1 class="mainheading">Receipt</h1>
</div>
        
        <ul>
  <li><a class="btnProceed" href="../homepage.html">Home</a></li>
  <li><a class="btnProceed"  href="Interests/sports.html">Interests</a></li>
  <li><a class="btnProceed"  href="/ebusiness/Ebus1.php">E Business</a></li>
  <li><a class="btnProceed"  href="/cv_page1.html">CV pages</a></li>
</ul>
        
    </head>
    <body>
        
        
        <?php
        //Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        <br>
        <?php
        echo "Discount Total is " . $_SESSION["discount"] . ".";
        ?>
        <br>
        <?php
        echo "VAT Total is " . $_SESSION["vattotal"] . ".";
        ?>
        <br>
        <?php
        echo "Full name is " . $_SESSION["fullname"] . ".";
        ?>
        <br>
        <?php
        echo "Email address is " . $_SESSION["email"] . ".";
        ?>
        <br>
        <div align=center
        <a href="/homepage.html" class="btn button">Home</a>
        </div>
    </body>
    </center>
</html>