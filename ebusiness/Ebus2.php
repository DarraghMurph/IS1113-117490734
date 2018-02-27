<?php
// start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                <label for="customername">
                    Full Name:
                </label>
                
                <input type="text" id="customername" name="customername" placeholder="Joe Soap">
                
                <br/>
                
                 <label for="email">
                    Email:
                </label>
                
                <input type="text" id="email" name="email" placeholder="joe.soap@yahoo.ie">
                
                <br/>
                
                <label for="user_pin">
                     PIN:
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                
                <br/>
                
                <label for="cardname">
                    Name on Card:
                </label>
                
                <input type="text" id="cardname" name="cardname" placeholder="Mr. Joe Soap">
                
                <br/>
                
                <label for="cardnumber">
                    Card Number:
                </label>
                
                <input type="text" id="cardnumber" name="cardnumber" placeholder="0000-0000-0000-0000" maxlength="16">
                
                <br/>
                
                <label for="expiry">
                    Expiry Date:
                </label>
                
                <input type="text" id="expiry" name="expiry" placeholder="'04/20' format" maxlength="5">
                
                <br/>
                
                <label for="cvv">
                    CVV:
                </label>
                
                <input type="text" id="cvv" name="cvv" placeholder="000" maxlength="3">
                
                <br/>
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="Ebus2_validator.js"></script>
        
        <?php
        // Set session variables
        $_SESSION["customername"]=$_POST["customername"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["totalPrice"]=$_POST["totalPrice"];
        $_SESSION["cardname"]=$_POST["cardname"];
        $_SESSION["cardnumber"]=$_POST["cardnumber"];
        $_SESSION["expiry"]=$_POST["expiry"];
        ?>
    </body>
    
    
    
</html>