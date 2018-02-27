/* global $ */

function validateDetails(){
    
    var pin;
    var customername;
    var email;
    var address;
    var cardtype;
    var exp;
    
    
    pin = document.getElementById("user_pin").value;
    customername = document.getElementById("customername").value;
    
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
