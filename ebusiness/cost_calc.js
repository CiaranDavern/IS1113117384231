/* global $ */

function calcSub(){
    
    var argSubTotal;
    var argVatTotal;
    var argTotal;
    
    if(document.getElementById('salesforce').checked) {
        argSubTotal = 100;
        argVatTotal = 10;
        argTotal = 110;
    }
    else {
        argSubTotal = 330;
        argVatTotal = 30;
        argTotal = 330;
    }
    display(argSubTotal);
    display(argVatTotal);
    display(argTotal);
    
}

function display(parm1){
   
    document.getElementById("subtotal").value = parm1;
    
    
    enablebtnProceed();
}
function display(parm2){
    document.getElementById("vattotal").value = parm2;
    
    
    enablebtnProceed();
}
function display(parm3){
    document.getElementById("total").value = parm3;
    
    
    enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}