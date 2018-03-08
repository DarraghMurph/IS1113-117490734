<?php
// start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        <!--Linking stylesheet-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         
        <!--Function for the text box to only allow numbers only-->
         <script>
             function isNumberKey(evt)
            {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
 
                return true;
            }
         </script> 
         
         <!--Function for the text box to only allow letters only-->
         <script>
             function alphaOnly(e) {
                var code;
                if (!e) var e = window.event;
                if (e.keyCode) code = e.keyCode;
                else if (e.which) code = e.which;
                if ((code >= 48) && (code <= 57)) { return false; }
                return true;
                }
         </script>
         
        <!--Styling the page-->
        <style>
                .cloud {
                float: right;
                height: 120px;
            }
            h2 {
                text-decoration: underline;
            }
            .cards {
                width: 350px;
                height:75px;
            }
            /* background image */
            body {
                background: url(http://www.ideasphere.com/wp-content/uploads/2016/08/Savin-NY-Website-Background-Web-1.jpg) no-repeat center fixed;
            }
            /* custom buttons */
            .submit {
             background-color: #e7e7e7; color: black;;
             display: inline-block;
             color: black;
             border-radius: 8px;
                
            }
            .submit:hover {
             background-color: green;
             cursor: pointer;
                color: white;
             
            }
            .validate {
             background-color: #e7e7e7; color: black;;
             display: inline-block;
             color: black;
             border-radius: 8px;
                
            }
            .validate:hover {
             background-color: black;
             cursor: pointer;
                color: white;
             
            }
            
        </style>
    </head>
    
    <body>
            <div class="w3-container w3-blue">
            <img class="cloud" alt="cloud" src="https://clipartion.com/wp-content/uploads/2016/04/cloud-images-illustrations-photos.png">
              <h1>Murphy Cloud Services</h1>
              <p>Please enter your specified details.</p>
            </div>        

        
            <br />
            <!--Creating form-->
            <form method = "POST" action = "Ebus3.php">
                
                
                <h2>Personal Details:</h2>
                
                <label for="customername">
                    Full Name:
                </label>
                <br/>
                <input type="text" id="customername" name="customername" placeholder="Joe Soap" onkeypress="return alphaOnly(event);">
                
                <br/>
                <br/>
                
                 <label for="email">
                    Email:
                </label>
                <br/>
                <input type="text" id="email" name="email" placeholder="joe.soap@yahoo.ie" maxlength="50">
                
                <br/>
                <br/>
                
                <h2>Card Details:</h2>
                
                <img class="cards" alt="cards" src="https://www.tufcosmetics.com/wp-content/uploads/2015/12/major-Credit-Card-Logos-1024x211.png">
                
                <br/>
                
                <label for="cardname">
                    Name on Card:
                </label>
                <br/>
                <input type="text" id="cardname" name="cardname" placeholder="Mr. Joe Soap" onkeypress="return alphaOnly(event);" maxlength="50">
                
                <br/>
                <br/>
                
                <label for="cardnumber">
                    Card Number:
                </label>
                <br/>
                <input type="text" id="cardnumber" name="cardnumber" placeholder="0000-0000-0000-0000" onkeypress="return isNumberKey(event)" maxlength="16">
                
                <br/>
                <br/>
                
                <label for="user_pin">
                     PIN:
                </label>
                <br/>
                <input type="password" id="user_pin" placeholder="Card Pin" onkeypress="return isNumberKey(event)" maxlength="4">
                
                <br/>
                <br/>

                <label for="expiry">
                    Expiry Date:
                </label>
                <br/>
                <input type="text" id="expiry" name="expiry" placeholder="'04/20' format" maxlength="5">
                
                <br/>
                <br/>
                
                <label for="cvv">
                    CVV:
                </label>
                <br/>
                <input type="text" id="cvv" name="cvv" placeholder="000" onkeypress="return isNumberKey(event)" maxlength="3">
                
                <br/>
                    
                <button type="Submit" class="submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            <!--Calling function-->
            <button onClick="validateDetails()" class="validate"> Validate </button>
        <!--Validator-->
        <script src="Ebus2_validator.js"></script>
        
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