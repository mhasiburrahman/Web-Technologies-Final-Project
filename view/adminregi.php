<div class = echo_color>
<?php include ("../control/adminreg_validate.php") ?>
</div>
<html>
<head>
    <title>Ecommerece System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/admin_regi_css.css">
  </head>

  <body>
   
  <div class ="header">
    <center>
      <h1>Admin Registration Form</h1>
    </center>
  </div>

    
    <form action = "" method = "POST">
    
  <div class="regibox">
    <h1 align ="center" >Personal Information</h1>
  </div>
  <div class = "absolute">

  <div class="frame">
  </div>  

            <table align = "center" >
              <tr>
                
                <td>First Name:</td>
                <td><input type="text" name="admin_fname" id="fname" onkeyup="fstnmcheck()">
                
                <label  id="fstnmerror"></label>
                
                <?php echo $invalid_fstname ; ?>
                </td>
              </tr>

              <tr>
                <td>Last Name:</td>
                <td><input type="text" name="admin_lname" id="lname"  onkeyup="lstnmcheck()">

                <label id="lstnmerror"></label>
                <?php echo $invalid_lstname ; ?>
              </td>
                
              </tr>

              <tr>
                <td>Gender:</td>
                <td>
                  <input type="radio" name="gender" id="m" value="Male" onclick="checkgender()">Male

                  <input type="radio" name="gender" id="f" value="Female" onclick="checkgender()">Female
                  <label id="radioerror" ></label>
                  <?php echo $invalid_gender ; ?>
                </td>
              </tr>

              <tr>
                <td>Religion:</td>
                <td><select name = "religion" >
                  <option value = "0" >Select</option> 
                  <option value = "Islam"  >Islam</option>
                  <option value = "Hindu" >Hindu</option>
                  <option value = "Cristian" >Cristian</option>
                  <option value = "Buddist" >Buddist</option>
                  
                </select>
                <label id="relerror" ></label>
                <?php echo $invalid_religion ; ?></td>
              </tr>

              <tr>
                <td>Nationality:</td>
                <td><input type="text" name="admin_natnlty" id="ntn" placeholder = "eg. bangladeshi" onkeyup="nationcheck()">
                <label id="ntnerror" ></label>
                <?php echo $invalid_nationlty ; ?></td>
              </tr>

              <tr>
                <td>Email:</td>
                <td><input type="email" name="admin_email" id="emailcheck" placeholder = "eg. name@yahoo.com" onkeyup="checkemail()">
                <label id="emailerror" ></label>
                <?php echo $invalid_email ; ?>
              </td>
              </tr>

              <tr>
                <td>Phone Number:</td>
                <td><input type="text" name="admin_phnnum" id="phn" onkeyup="phnnumcheck()" placeholder = "eg. 01X-XXXXXXXX">
                <label id="numerror" ></label>
                <?php echo $invalid_phnnum ; ?>
              </td>
              </tr>

              <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="admin_dob" id="dob" onclick="dobcheck()">
                <label id="dater" ></label>
                <?php echo $invalid_dob ; ?>
              </td>
              </tr>

              <tr>
                <td>Address:</td>
                <td><textarea id = "address" name="address" rows = "4" cols = "40" ></textarea>
                <?php echo $invalid_address ; ?>
              </td>
              </tr>

            </table>
</div>
      
      <br><br>

      
    <div class="regibox">
      <h1 align ="center" >Login Information</h1>
    </div>
    <div class = "absolute">
    <div class="frame">
    </div>  
      <table align = "center" >
              <tr>
                <td>User Name:</td>
                <td><input type="text" name="admin_set_uname" id = "uname" placeholder="User Name" onkeyup="checkUname()">
                <label id="unamer" ></label>
                <?php echo $invalid_set_uname ; ?>
              </td>
              </tr>

              <tr>
                <td>Password:</td>
                <td><input type="password" name="admin_set_pass" id="passx" placeholder="Password" onkeyup="checkpassword()">
                <input type="checkbox" id="showpass">Show Password</input>  
                <label id="passer" ></label>
                <?php echo $invalid_set_pass ; ?>
              </td>
              </tr>

              <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="admin_conifrm_pass" placeholder="Confirm Password" id="passy" onkeyup="confrmpass()">
                <label id="confer" ></label>
                <?php echo $invalid_confrm_pass ; ?>
              </td>
              </tr>
            </table>
            <table align = "center">

            <tr><td id="button1">
            <input  type = "submit" class ="button submit" name = "submit" value = "Register"></td>
             <td id="button2">   
            <input  type = "reset" class ="button reset" name = "reset" value = "Reset"></td></tr>
</table>
<label id="allinfo"></label>
            <a href = "adminlogin.php"><h5>Already have an account? Login</h5></a>
  </form>
  <script src="../js/admin_regi.js"></script>
  </body>
</html>
 