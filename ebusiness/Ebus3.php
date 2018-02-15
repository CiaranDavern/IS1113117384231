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
        
    </head>
    <body>
        
        
        <?php
        //Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
    </center>
</html>