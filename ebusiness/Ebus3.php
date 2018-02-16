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
  <li><a class="btnProceed"  href="../sports.html">Interests</a></li>
  <li><a class="btnProceed"  href="../Ebus1.php">E Business</a></li>
</ul>
        
    </head>
    <body>
        
        
        <?php
        //Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
    </center>
</html>