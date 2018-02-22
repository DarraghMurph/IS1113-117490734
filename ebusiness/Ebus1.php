<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        
    </head>
    
    <body>
        
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
                
                <label for="salesforce">
                    <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                    SalesForce @ $100
                </label>
                
                <br/>
                
                <label for="cloud9">
                    <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                    Cloud 9 @ $200
                </label>                
                
                <br/>
                
                <label for="aws">
                    <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                    AWS @ $300
                </label>
                
                <br/>
                
                <label for="gmail">
                    <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                    Gmail @ $400
                </label>

                <br/>                
                <br/>
                <br/>
                
                <label for="subTotal">
                    Sub Total
                    <input type="text" id="subTotal" name="subTotal" value="0.00" readonly/>
                </label>
                
                <br/>
                <br/>
                
                <label for="discountAmt">
                    Discount @ 5%
                    <input type="text" id="discountAmt" name="discountAmt" value="0.00" readonly/>
                </label>
                
                <br/>
                <br/>
               
                <label for="vatAmt">
                    VAT @ 10%
                    <input type="text" id="vatAmt" name="vatAmt" value="0.00" readonly/>
                </label>
                
                <br/>
                <br/>
               
                <label for="totalPrice">
                    Total
                    <input type="text" id="totalPrice" name="totalPrice" value="0.00" readonly/>
                </label>
                
                <br/>
                <br/>
                
                <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
                
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
        
    </body>
</html>
