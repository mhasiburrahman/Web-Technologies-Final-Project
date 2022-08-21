<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
include("../control/buyerLogin_Control.php");
?>
<html lang="en">
<head>
<link rel="stylesheet"  href="../css/mystyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<div class = "header">
<h1>Ecommerce System Login</h1><hr><br>
<!-- <h2>Buyer Registration</h2><hr> -->
</div>

<div class="registrationBox">
<h1 align="left">Buyer Login </h1>
</div>
<form action="" method="POST">
    <br>
    <br>
    <br>
    <br>
    <br>
<table align="center">
    
    <tr><td><b>Username</td> 
    <td><input type="text" name="uname" placeholder="Enter username or email"></td>
    <td> <?php
            echo $usernameError;
       ?>
       </td></tr>
       <tr><td><br><b>Password</td>
       <td><br><input type="password"name="password"></td>
       <td> <?php
            echo $userPass_Error;
       ?>
       </td></tr>
</table> 
<br>
<center>
<!-- <table align="center"> -->
<input type="submit" name="submitlogin" value="Login">
<input type="Reset" name="Reset" value="Reset"><br>
<!-- <input type="Update" name="" value="Reset"><br> -->
<p><a href="buyer_registration.php"><p>Don't Have an Account? Register now!</p></a>
</center>
</form>
</body>
</html>