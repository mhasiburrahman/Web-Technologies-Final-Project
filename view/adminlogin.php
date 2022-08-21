<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
 include ("../control/adminlogin_validate.php") ?>

<html>
<head>
    <title>Ecommerece System</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_login_css.css">
  </head>

  <body>

    <form action = "" method = "POST">

    <div class ="header">
    <center>
    <h2>Admin Login Form</h2>
    </center>
  </div>
      
  <div class="regibox">
    <h1 align ="center" >Login Details</h1>
  </div>

  <div class = "absolute">

  <div class="frame"></div>

            <table align = "center" >
              <tr>
                <td>User Name:</td>
                <td><input type="text" name="admin_uname" placeholder="User Name">
                <?php echo $invalidUsername; ?></td>
                
              </tr>

              <br><br>

              <tr>
                <td>Password:</td>
                <td><input type="password" name="admin_pass" placeholder="Password">
                <?php echo $invalidPassword; ?></td>
              </tr>

              <tr>
                <td id ="button1" align = "center"><br>
                  <input type = "submit" class = "button submit" name = "submit" value = "Login">
                </td>
              </tr>

              <tr>
                <td id ="anchor" ><br><a href = "adminregi.php">Not have an account? Register</a>
              </tr>
            </table>
      </fieldset>    
      <script src="../js/admin_regi.js"></script>  
  </body>
</html>
 