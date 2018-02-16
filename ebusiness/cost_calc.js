/* global $ */
function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
        argSubTotal = 100;
        
    }
    else {
        argSubTotal = 300;
        
    }
   
function calcDisVatTotal(argSubTotal){
    var argTotal;
    var argDiscount;
    var argVat;
    if(document.getElementById('salesforce').checked) {
        argDiscount = 5;
        argVat = 9.50;
        argTotal = 104.50;
}
else{
    argDiscount = 15;
    argVat = 28.50;
    argTotal = 313.50;
} 
function Display(argSubTotal){
    document.getElementById("subtotal").value = argSubTotal;
    
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}