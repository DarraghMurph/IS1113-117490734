<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="cost_calc.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <style>
            h2.mainheading {
                text-decoration: underline;
            }
            img.cloud {
                float: right;
                height: 120px;
            }
            body {
                background: url(http://www.ideasphere.com/wp-content/uploads/2016/08/Savin-NY-Website-Background-Web-1.jpg) no-repeat center fixed;
            }
            .cost {
             background-color: #e7e7e7; color: black;;
             display: inline-block;
             color: black;
             border-radius: 8px;
            }
            .cost:hover {
                background-color: black;
                cursor: pointer;
                color: white;
                
            }
            .add {
             background-color: #e7e7e7; color: black;;
             display: inline-block;
             color: black;
             border-radius: 8px;    
            }
            .add:hover {
                background-color: green;
                cursor: pointer;
                color: white;
                
            }
            
        </style>
    </head>
    
    <body>
        
            <div class="w3-container w3-blue">
            <img class="cloud" alt="cloud" src="https://clipartion.com/wp-content/uploads/2016/04/cloud-images-illustrations-photos.png">
              <h1>Murphy Cloud Services</h1>
              <p>Select a service.</p>
            </div>        

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
                
                <button type="submit" class="add" id="btnProceed" disabled>Add to Shopping Cart</button>
                
            </form>
            
            <br/>
            <button onClick="calcSub()" class="cost">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
        
    </body>
</html>
