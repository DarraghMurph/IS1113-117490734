<!Doctype html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.win.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    
    </head>
    
    <body>
        
        <h4>Select a product</h4>
        
        <br/>
        
        <form method="POST" action="Ebus2.php">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()*"/>
                Salesforce @ $100
            </label>
            
            <br/>
            <label for="aws">
            <input type="radio" id="aws" name="product" onClick="disablebtnProceed()*"/>
            AWS @ $100
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <label for="total">
                Total
                <input type="text" id="Total" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <button type="submit" id="btnProceed" disabledAdd to shopping card></button>
            
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choices</a>
        
    </body>
</html>