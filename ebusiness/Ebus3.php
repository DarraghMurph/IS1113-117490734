<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        <style>
            body {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h3>E-Receipt</h3>
        <?php
        // Echo session variables that were on previous page
        echo "Customer Name: " . $_POST["customername"] . ".";
        ?>
        <br/>
        <?php
        echo "E-mail: " . $_POST["email"] . ".";
        ?>
        <br/>
        <?php
        // Echo session variables that were on previous page
            echo "Total is: $" . $_SESSION["totalPrice"] . ".";
        ?>
        <br/>
        <?php
        // Echo session variables that were on previous page
            echo "Payment Method: VISA Card."
        ?>
        <br/>
        
        <h4>Thank you for your custom.</h4>
        
        <button>Print Receipt</button>
        <a href="../homepage.html"><button>Return Home</button></a>
    </body>
</html>