/* global $ */

/*calculations as seen on ebus1 */
function calcSub(){
    
    var argSubTotal; 
    
    if(document.getElementById("salesforce").checked){
    argSubTotal=100;
}
    else if (document.getElementById("aws").checked){ 
        argSubTotal=300;
    }
     else if (document.getElementById("cloud9").checked){ 
        argSubTotal=200;
     }
     else{
         argSubTotal=400;
     }
     
    
    display(argSubTotal);
    calcDisVatTotal(argSubTotal);
}
/* vat and discount calculations */
function calcDisVatTotal(parmsubtotal){
    
    var vatAmt=0.1;
    var discountAmt=0.05;
    var subTotal;
    var totalPrice;
    
    subTotal = parmsubtotal;
    vatAmt = (parmsubtotal * vatAmt);
    discountAmt = (parmsubtotal * discountAmt);
    totalPrice = (parmsubtotal + vatAmt - discountAmt);
    
    display(subTotal, discountAmt, vatAmt, totalPrice);
    
}

function display(parm1, parm2, parm3, parm4) {
    
    document.getElementById("subTotal").value= parm1;
    document.getElementById("discountAmt").value= parm2;
    document.getElementById("vatAmt").value= parm3;
    document.getElementById("totalPrice").value= parm4;
    
        

    
    $('#btnProceed').prop('disabled', false);
    
    
}  
/* enabling/disabling buttons */
function enablebtnProceed() {
    $('#btnProceed').prop('disabled', false);
    
} 

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true); 
} 
