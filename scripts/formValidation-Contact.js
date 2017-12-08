
//we referenced code from the labs and our project 3
$(document).ready(function() {

  // Form validation
  $("#myform").on("submit", function() {
    var validform=true;



    var nameValid= $("#name").prop("validity").valid && $("#name").length>0;
    if(nameValid){
      $("#nameError").hide();
    }

    else {
      $('#nameError').show();
      validform=false;
    }

    var emailValid= $("#email").prop("validity").valid && $("#email").length>0;
    if(emailValid){
      $("#emailError").hide();
    }

    else {
      $('#emailError').show();
      validform=false;
    }

    var extraValid=$("#extra").prop("validity").valid && $("#extra").length>0;
    if(extraValid){
      $("#extraError").hide();
    }

    else{
      $("#extraError").show();
    }



    return validform;
  });
});
