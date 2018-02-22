/* global $ */

var argSubTotal;
var discountAmt;
var vatAmt;
var totalPrice;

function calcSub(){
    
    if(document.getElementById('salesforce').checked){ 
        argSubTotal = 100;
        
    }else if (document.getElementById('aws').checked){
        argSubTotal = 300;
     }else if (document.getElementById('gmail').checked){
        argSubTotal = 150;
      }else{
        argSubTotal = 80;
      }
   calcDisVatTotal();
}
function calcDisVatTotal(parmSubTotal){
    if(document.getElementById('salesforce').checked){ 
        discountAmt = 5;
        vatAmt = 9.50;
        totalPrice = 104.50
        
    }else if (document.getElementById('aws').checked){
        discountAmt = 15;
        vatAmt = 28.50;
        totalPrice = 313.50
     }else if (document.getElementById('gmail').checked){
        discountAmt = 7.50;
        vatAmt = 14.25;
        totalPrice = 156.75
      }else{
        discountAmt = 4;
        vatAmt = 7.60;
        totalPrice = 83.60
      }
      display(argSubTotal, discountAmt, vatAmt, totalPrice)
}
   
function display(parm1, parm2, parm3, parm4){
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vattotal").value = parm3;
    document.getElementById("total").value = parm4;
    

    enablebtnProceed();
}
function validate(){
   
        if (document.getElementById("fullname").value == ""){
            // something is wrong
            alert('You must enter a full name');
            return false;
        }else if (document.getElementById("email").value == ""){
            // something is wrong
            alert('You must enter an email');
            return false;
        }
        return true;
        } 

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}
