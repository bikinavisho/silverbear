$(document).ready(function () {
  $("#application-form").on("submit",function(){
    var formvalid=true;
    var namevalid=$("#app-name").prop("validity").valid;
    var emailvalid= $("#app-email").prop("validity").valid;
    var messagevalid=$("#app-message").prop("validity").valid
    && $("#app-message").length>0;
    var availvalid=$("#avail").prop("validity").valid && $("#avail").length>0;
    if(namevalid && emailvalid && messagevalid && availvalid){
      $("#app-nameError").hide();
      $("#app-emailError").hide();
      $("#app-messError").hide();
      $("#availError").hide();
      return formvalid;
    }
    else{
      if(!namevalid){
        $("#app-nameError").show();
      }
      else{
        $("#app-nameError").hide();
      }
      if(!emailvalid){
        $("#app-emailError").show();
      }
      else{
        $("#app-emailError").hide();
      }
      if(!messagevalid){
        $("#app-messError").show();
      }
      else{
        $("#app-messError").hide();
      }
      if(!availvalid){
        $("#availError").show();
      }
      else{
        $("#availError").hide();
      }

      formvalid=false;
    }
    return formvalid;
  });
});
