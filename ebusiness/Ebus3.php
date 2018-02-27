<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
    </head>
    <body>
        <h4>Receipt</h4>
        
        <?php
        echo "Customer Name: " . $_POST["customername"] . ".";
        ?>
        </br>
        <?php
        // Echo session variables that were on previous page
            echo "Total is: $" . $_SESSION["totalPrice"] . ".";
        ?>
        
        <button>Print Receipt</button>
        <a href="../homepage.html"><button>Return Home</button></a>
    </body>
</html>