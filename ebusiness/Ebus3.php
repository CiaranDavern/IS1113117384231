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
                font-size: 32px;
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
        </p>
        <br>
        
        <a href="../homepage.html" class="btn button">Home</a>
        
    </body>
    </center>
</html>