<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"</script>
    <script type="text/javascript" src="cost_cal.js"</script> 
    </head>
    <body>
        <style>
        
        body {
            background-color: LightBlue;
             }
        button {
           background-color: #f44336; /* Orange */
    
    color: Yellow;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
        }
       </style>
        <h4 classSelect a product</h1>
        
        <br/>
        
        <form method="POST" action="Ebus2.php">
            
            <lable for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </lable>
            
            <br/>
            
            <lable for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </lable>
            
            <br/>
            <br/>
            
            <lable for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
                
            </lable>
            
            <br/>
            
            
            <lable for="total">
                Sub Total
                <input type="text" id="total" value="0.00" readonly/>
                
            </lable>
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
        
    </body>
</html>