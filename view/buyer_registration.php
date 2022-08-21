<?php
include("../control/buyer_process.php");
?>
<html lang="en">
<head>
     
<link rel="stylesheet"  href="../css/mystyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">About US</a>
  <a href="#">Shop</a>

</div>
     <div class = "header">
<h1>Ecommerce System</h1><hr><br>
<!-- <h2>Buyer Registration</h2><hr> -->
</div>

<div class="registrationBox">
<h1 align="left">Buyer Registration form </h1>
</div>

<div class="container">
<form action="" method="POST" enctype="multipart/form-data">
<table>

     <center>
    <tr><td>Full Name</td> 
    <td><input type="text" id="name1" onkeyup="buyer_fname()" placeholder="" name="f_name"></td>
    
    <td> <?php
            echo $Error_f_name;
       ?>
       <label id="fnameinvalid"></label>
       </td></tr>
       
       </td></tr>
       <tr><td>Email</td>
       <td><input type="text" id="mail" onkeyup="buyer_email()" placeholder="" name="mail"></td>
       
      <td><?php
            echo $Error_email;
       ?>
       <label id="emailinvalid"></label>
       <tr><td>Username</td>
       <td><input type="text" placeholder="" name="u_name"></td>
       <td> <?php
            echo $Error_username;
       ?>
       </td></tr>
       <tr><td>Phone Number</td> 
       <td><input type="tel" name="phn_number" id="mob" onkeyup="buyer_mobile()" placeholder=""></td>
       
       
        <td><?php
            echo $Error_number;
       ?>
       <label id="Mobileinvalid"></label>
       
       </td></tr>
       <tr><td>Date of Birth</td> 
       <td><input type="date" id="age1" onkeyup="buyer_age()" placeholder="" name="age"></td>
       
       <td> <?php
            echo $Error_date;
       ?>
       <label id="ageinvalid"></label>
       
        </td></tr>
       <tr><td>Password</td>
       <td><input type="password" id="pass1" onkeyup="buyer_pass()" placeholder="" name="pass"></td>
       <!-- <td><input type="checkbox" id="showpass">Show Password</input> </td> -->

       <td> <?php
            echo $Error_pass;
       ?>
       <p id="passinvalid"></p>
        </td></tr>
       <tr><td>Confirm Password</td>
       <td><input type="password" placeholder="" name="confirm_pass"></td>
       <td> <?php
            echo $Error_pass_cmp;
       ?>
       
        </td></tr>
       <tr><td>Gender</td>
       <td><input type="radio" id="M" onclick="buyer_gender()" name="gender" value="Male">Male
        <input type="radio" id="F" onclick="buyer_gender()" name="gender" value="Female">Female
        <!-- <input type="radio" name="gender" value="Other">Other</td> -->
        <td> <?php
            echo $Error_gender;
       ?>
       <label id="radioinvalid"></label>
       <tr><td>Address</td>
       <!-- <td><input type="text" placeholder="" name="address" rows = "4", cols = "40"></td> -->
       <td><textarea id = "address" name="address" rows = "4" cols = "40" ></textarea>
       <td> <?php
            echo $Error_address;
            ?>
      </td></tr>

    
      
</table>
<br><input type="submit" name="submitReg" value="Register">
       <input type="Reset" name="Reset" value="Reset">
       <h4>Already have an account? <a href="../view/buyer_login.php">Login</a></h4>
       <br><div id="demo">
<h2>Terms and conditions</h2>
<!-- ajax -->
<button type="button" onclick="loadDoc()">Show</button>
</div> 
</center>
</form>
</div>
<script src="../js/buyer_reg_js.js"></script>

</body>
</html>
