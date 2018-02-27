/* global $ */

function validateDetails(){
    
    var pin;
    var customername;
    var email;
    var cardname;
    var cardnumber;
    var expiry;
    var cvv;
    

    pin = document.getElementById("user_pin").value;
    customername = document.getElementById("customername").value;
    email = document.getElementById("email").value;
    cardname = document.getElementById("cardname").value;
    cardnumber = document.getElementById("cardnumber").value;
    expiry = document.getElementById("expiry").value;
    cvv = document.getElementById("cvv").value;
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        enablebtnPurchase();
        }
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}
