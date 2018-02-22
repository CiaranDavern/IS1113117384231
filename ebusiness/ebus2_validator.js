/* global $ */

function validateDetails(){
    
    var pin;
    var card;
    pin = document.getElementById("user_pin").value;
    card = document.getElementById("Card_Number").value;
    
    if (pin == ""){
        alert("Please enter your PIN And Card Details");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else if (card == ""){
        alert("Please enter your PIN And Card Details");
    }
    else if (String(card).length < 16){
        alert("Please make sure your PIN is accurate");
    }
    else{
        enablebtnPurchase();
    }
    
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}