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
            .container {
                background-color: #f2f2f2;
                padding: 5px 20px 15px 20px;
                border: 1px solid lightgrey;
                border-radius: 3px;
}


            .row {
                display: -ms-flexbox; /* IE10 */
                display: flex;
                -ms-flex-wrap: wrap; /* IE10 */
                flex-wrap: wrap;
                margin: 0 -16px;
}

            h4 {
            border-bottom: 6px;
            background-color: lightgrey;
            }
            
            h3 {
            border-style: groove;
            }
            .print {
             background-color: #e7e7e7; color: black;;
             display: inline-block;
             color: black;
             border-radius: 8px;
                
            }
            .print:hover {
             background-color: black;
             cursor: pointer;
                color: white;
             
            }
            .home {
             background-color: #e7e7e7; color: black;;
             display: inline-block;
             color: black;
             border-radius: 8px;
                
            }
            .home:hover {
             background-color: green;
             cursor: pointer;
                color: white;
             
            }
        </style>
    </head>
    <body>
        <div style="margin-right:auto;margin-left:auto;width:350px;">
        <div class="row">
            <div class="container">
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
        
        <button onclick="myFunction()" class="print">Print Receipt</button>
        <a href="../homepage.html"><button class="home">Return Home</button></a>
        </div>
        </div>
        </div>
        
        <script>
        function myFunction(){
        window.print();
        }
</script>        
    </body>
</html>