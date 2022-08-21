function buyer_fname() {
    var fnameval=document.getElementById("name1").value;
    if(fnameval.length<5 || !isNaN(fnameval)){
        document.getElementById("fnameinvalid").innerHTML="First Name is not  correct";
        return false;
    }
    else if(fnameval==""){
        document.getElementById("fnameinvalid").innerHTML="First Name cannot be empty";
        return false;
    }
    else{
        document.getElementById("fnameinvalid").innerHTML="First Name is  correct";
        return true;
      
    }
}

function buyer_email() {
    var email_regex =/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
    var email_regex_com = /^w+([-+.']w+)*@[A-Za-zd]+.com$/;
    var emailval=document.getElementById("mail").value;
    if(emailval.match(email_regex) || emailval.match(email_regex_com)){
      document.getElementById("emailinvalid").innerHTML="Email is correct";
      return true;
  
    }
    else if(emailval==""){
      document.getElementById("emailinvalid").innerHTML="Email cannot be empty";
      return false;
    }
  
    else{
      document.getElementById("emailinvalid").innerHTML="Email is not correct";
      return false;
    }
  }


function buyer_mobile() {
    var mobileval=document.getElementById("mob").value;
    if(mobileval.length>=11 && !mobileval==""){
        document.getElementById("Mobileinvalid").innerHTML="Mobile is correct";
        return true;
    
    }
    //cannot start with +88
    else if(mobileval.startsWith("+88")){
        document.getElementById("Mobileinvalid").innerHTML="Mobile cannot start with +88";
        return false;
    }
    else{
        document.getElementById("Mobileinvalid").innerHTML="Mobile is not correct";
        return false;
    }

}
// function buyer_age() {
//     var age_regex =/^\d{2}$/;
//     var ageval=document.getElementById("age1").value;
  
//      //if age matches return true
//       if(ageval.match(age_regex) && ageval!="" && ageval>=18){
//           document.getElementById("ageinvalid").innerHTML="Age is correct";
//           return true;
      
//       }
      
//       else if(ageval==""){
//           document.getElementById("ageinvalid").innerHTML="Age cannot be empty";
//           return false;
//       }
//       else{
//           document.getElementById("ageinvalid").innerHTML="Age is not correct";
//           return false;
//       }
  
//   }

  function buyer_pass() {
    var pass_regex =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    var passval=document.getElementById("pass1").value;
    if(passval.match(pass_regex) && passval.length>=5 && passval!=""){
      document.getElementById("passinvalid").innerHTML="Password is correct";
      return true;
    }
    //check password is empty
      else if(passval==""){
          document.getElementById("passinvalid").innerHTML="Password cannot be empty";
          return false;
      }
  
    else{
      document.getElementById("passinvalid").innerHTML="Password must contain at least one uppercase, one digit and one special character";
      return false;
    }
  }

  //radio
function buyer_gender() {
    if (document.getElementById("M").checked == true) {
      document.getElementById("radioinvalid").innerHTML = "Male selected";
      return true;
   
    } else if (document.getElementById("F").checked == true) {
      document.getElementById("radioinvalid").innerHTML = "Female selected";
      return true;
  
    } 
    // else if (document.getElementById("other").checked == true) {
    //   document.getElementById("radioinvalid").innerHTML = "Others is checked";
    //   return true;
  
    // } 
    else {
      document.getElementById("radioinvalid").innerHTML =
        "Please select a radioButton";
      return false;
    }
  }
  function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", "ajax_info.txt");
    xhttp.send();
  }
  // jquery
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideDown("slow");
  });
});
