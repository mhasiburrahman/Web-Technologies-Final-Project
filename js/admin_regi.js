//cannot have special characters and atleast five characters long
function fstnmcheck() {

  var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
  var fstnameval=document.getElementById("fname").value;
  if(fstnameval.length<5 || !isNaN(fstnameval)){
      document.getElementById("fstnmerror").innerHTML="*Invalid First Name";
      return false;
  }
  else if(fstnameval==""){
      document.getElementById("fstnmerror").innerHTML="*First Name is required";
      return false;
  }
  else if(fstnameval.match(format)){
     document.getElementById("fstnmerror").innerHTML="*First Name should not contain special characters";
    return false;
  }
  else{
      document.getElementById("fstnmerror").innerHTML="*Valid First Name";
      return true;
    
  }
}

function lstnmcheck() {
  var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
  var lstnameval=document.getElementById("lname").value;
  if(lstnameval.length<5 || !isNaN(lstnameval)){
      document.getElementById("lstnmerror").innerHTML="*Invalid Last Name";
      return false;
  }
  else if(lstnameval==""){
      document.getElementById("lstnmerror").innerHTML="*Last Name is required";
      return false;
  }
  else if(lstnameval.match(format)){
     document.getElementById("lstnmerror").innerHTML="*Last Name should not contain special characters";
    return false;
  }
  else{
      document.getElementById("lstnmerror").innerHTML="*Valid Last Name";
      return true;
    
  }
}

function checkgender() {
  if (document.getElementById("m").checked == true) {
    document.getElementById("radioerror").innerHTML = "Male is checked";
    return true;
 
  } else if (document.getElementById("f").checked == true) {
    document.getElementById("radioerror").innerHTML = "Female is checked";
    return true;

  } else {
    document.getElementById("radioerror").innerHTML =
      "Please select a radioButton";
    return false;
  }
}

//must start with a small case
function nationcheck() {
  var ntnformat = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
  var natnl=document.getElementById("ntn").value;
  if(!natnl.startsWith(natnl.charAt(0).toLowerCase())){
      document.getElementById("ntnerror").innerHTML="*should start with small letter";
      return false;
  }
  else if(natnl==""){
      document.getElementById("ntnerror").innerHTML="*Nationality is required";
      return false;
  }
  else if(natnl.match(ntnformat)){
      document.getElementById("ntnerror").innerHTML="*Invalid Nationality";
      return false;
  }
  else{
      document.getElementById("ntnerror").innerHTML="*Valid Nationality";
      return true;
    
  }
}
//email formats
function checkemail() {
  // var email_regex =/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
  var email_regex = ('[a-z0-9]+@[a-z]+\.[a-z]{2,3}');
  var email_regex_specific = ('[a-z0-9]+@xycompany.com'); //specificcompany name for domain
  var email_regex_lastthree = ('[a-z0-9]+@[a-z]+\.edu\.[a-z]{2,3}'); //any org, edu, eu, us, followed by two dots
  var emailval=document.getElementById("emailcheck").value;
  if(emailval.match(email_regex) || emailval.match(email_regex_specific) || emailval.match(email_regex_lastthree)){
    document.getElementById("emailerror").innerHTML="*Email is correct";
    return true;
  }
  else if(emailval==""){
    document.getElementById("emailerror").innerHTML="*Email cannot be empty";
    return false;
  }

  else{
    document.getElementById("emailerror").innerHTML="*Email is not correct";
    return false;
  }
}

//start with +880, and can have hiphen 01X-XXXX-XXXX
function phnnumcheck() {
  var mobileval=document.getElementById("phn").value;
  var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
  if(mobileval.length>=11 && !mobileval==""){
      document.getElementById("numerror").innerHTML="*Phone Number is correct";
      return true;
  
  }
  else if(mobileval.match(phoneno)){
      document.getElementById("numerror").innerHTML="*Phone Number is  correct";
      return true;
  }
  else{
      document.getElementById("numerror").innerHTML="*Phone Number is not correct";
      return false;
  }

}

//small case and uppper case, ny digit of 2 numbers, cannot accept special characters except underscore.
function checkUname() {
  var unameFormat=/^[a-z]{2,}\d*$/i;
  var unameFormatx="^[a-zA-Z0-9_]*$";
  var unameval=document.getElementById("uname").value;
if(unameval.match(unameFormat)||unameval.match(unameFormatx)){
      document.getElementById("unamer").innerHTML="*Valid Username";
      return true;
  }
  else{
      document.getElementById("unamer").innerHTML="*Invalid Username";
      return false;
  }

}

function checkpassword() {
  var pass =/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
  var passval=document.getElementById("passx").value;
  if(passval.match(pass)){
    document.getElementById("passer").innerHTML="*Password is correct";
    return true;
  }
  //check password is empty
    else if(passval==""){
        document.getElementById("passer").innerHTML="*Password cannot be empty";
        return false;
    }

  else{
    document.getElementById("passer").innerHTML="*Password must contain at least one uppercase, one lower case, one digit and one special character";
    return false;
  }
}
function confrmpass() {
    //check if password is same as confirm password
    var passval=document.getElementById("passx").value;
    var conpassval=document.getElementById("passy").value;
    if(passval==conpassval){
        document.getElementById("confer").innerHTML="*Password Matched";
        return true;
    }
    else if(conpassval==""){
        document.getElementById("confer").innerHTML="*Confirm Password cannot be empty";
        return false;
    }
    else{
        document.getElementById("confer").innerHTML="Not Matched! Try Again!";
        return false;
    }

}
function checkform() {
  if(fstnmcheck()==true && lstnmcheck()==true && checkgender()==true && nationcheck()==true && checkemail()==true && phnnumcheck()==true && checkUname()==true && checkpassword()==true && confrmpass()==true ){
      document.getElementById("allinfo").innerHTML="All Fields are correct";
      return true;

  }
  else{
      document.getElementById("allinfo").innerHTML="Please fill up all the fields";
      return false;

  }
}

// function showHint(str) {
//   if (str.length == 0) {
//     document.getElementById("txtHint").innerHTML = "";
//     return;
//   } else {
//     var xmlhttp = new XMLHttpRequest();
//     xmlhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {
//         document.getElementById("txtHint").innerHTML = this.responseText;
//       }
//     };
//     xmlhttp.open("GET", "../control/adminUnameCheck.php?q=" + str, true);
//     xmlhttp.send();
//   }
// }

//jquery - showing password
$(document).ready(function(){
  $('#showpass').click(function(){
    var x=$('#passx');
    var y=x.attr('type');
    if(y=='password'){
      x.attr('type','text');
      $(this).text('Hide Password');
    }
    else{
      x.attr('type','password');
      $(this).text('Show Password');
    }
  });
});





