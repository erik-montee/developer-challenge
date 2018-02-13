$(function() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-Token': $('meta[name="_token"]').attr('content')
    }
  });
});

function validateEmail(email){
        var patt = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g;
    if(patt.test(email)){ 
        return true;
     }
        return false;
}

function validatePhoneNumber(phoneNumber){
    newPhoneNumber = phoneNumber.replace(/\D/g,''); 
    phoneNumberLength = newPhoneNumber.length;
    if(phoneNumberLength >= 10 && phoneNumberLength <= 15) {
        numberArray = newPhoneNumber.split('');
        if(numberArray[0] === numberArray[1] && numberArray[1] === numberArray[2]) {
            return false;
        }
        if(checkPattern(newPhoneNumber) === true) {
            return false;
        }    
        return true;
    }
    return false;  
}

function checkPattern(phoneNumber){
    patternArray = ["1234567890","0987654321","9876543210","0123456789",
        "0101010101","1010101010"];
    x = 0;
    patternArray.forEach(function(pattern) {
        if(phoneNumber.indexOf(pattern) !== -1) {
            x = 1;
        }
    });
   if(x == 1) {
       return true;
   } else {
       return false;
   }
}

$('#formSubmit').click( function( event ) {
    event.preventDefault();
    var Name = $("#Name").val();
    var Email = $("#Email").val();
    var Phone = $("#Phone").val();
    if(validateEmail(Email) == false) {
        alert("Please enter a valid email");
        return;
    } 
    if(validatePhoneNumber(Phone) == false){
        alert("Please enter a valid Phone Number");
        return;
    } else {
        $.ajax({
        url      : '/ajax/leadform',
        type     : 'POST',
        dataType : "json",
        data     : { 
            "email" : Email,
            "name"  : Name,
            "phoneNumber" : Phone },
        success  : function(data) {
                      alert("You have submitted the form!");
                  },
        error    : function(data) { 
                      if(data['phoneNumber'] !== ''){
                          alert("Enter a valid phone number");
                      } else if(data['email'] !== '') {
                          alert("Enter a valid email");
                      }
                  }
        });
        
    }
});

$('#Email').blur(function(){
    var Email = $("#Email").val();
    if(validateEmail(Email) == false){
         $('#Email').removeClass('is-valid');
         $('#Email').addClass('is-invalid');
    } else {
         $('#Email').removeClass('is-invalid');
         $('#Email').addClass('is-valid');
    }
        
});

$('#Phone').blur(function(){
    var Phone = $("#Phone").val();
    if(validatePhoneNumber(Phone) == false){
         $('#Phone').removeClass('is-valid');
         $('#Phone').addClass('is-invalid');
    } else {
         $('#Phone').removeClass('is-invalid');
         $('#Phone').addClass('is-valid');
    }
        
});

