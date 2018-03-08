/* global $ */

function validateDetails(){
    
    

    pin = document.getElementById("user_pin").value;
    customername = document.getElementById("customername").value;
    email = document.getElementById("email").value;
    cardname = document.getElementById("cardname").value;
    cardnumber = document.getElementById("cardnumber").value;
    expiry = document.getElementById("expiry").value;
    cvv = document.getElementById("cvv").value;
    
    /* declaring variables followd by if statement for validation */
    var pin;
    if (pin==""){
        alert("Please enter your PIN.");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is correct.");
        }
    else{
        enablebtnPurchase();
        }
    
    
    var customername;
    if (customername==""){
        alert("Please enter your full name.");
        }
    else{
        enablebtnPurchase();
        }    
    
   
    var email;
    if (email==""){
        alert("Please enter your email.");
        }
    else{
        enablebtnPurchase();
        }   
        
   
    var cardname;
    if (cardname==""){
        alert("Please enter the name as shown your card.");
        }
    else{
        enablebtnPurchase();
        }
        
    
    var cardnumber;
    if (cardnumber==""){
        alert("Please enter your card number.");
        }
    else if (String(cardnumber).length<16){
        alert("Please make sure your card number is correct.");
        }
    else{
        enablebtnPurchase();
        }    

    
    var expiry;
    if (expiry==""){
        alert("Please enter the card expiry date.");
        }
    else if (String(expiry).length<5){
        alert("Please make sure your expiry is correct. Please note it must be written in 5-digit format e.g. May=05, 2020=20. - 05/20");
        }
    else{
        enablebtnPurchase();
        }   

    
    var cvv;
    if (cvv==""){
        alert("Please enter your CVV, it can be found on the back of your card.");
        }
    else if (String(cvv).length<3){
        alert("Please make sure your CVV is correct, it can be found on the back of your card.");
        }
    else{
        enablebtnPurchase();
        }        
}

/* enabling/disabling buttons */
function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}
