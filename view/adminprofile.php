<div class = "absolute">
<?php include ("../control/sessioncheck.php") ?>
<?php include ("../control/cookie.php") ?>

</div>
<html>
  <head>
    <title>Ecommerece System</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_profile_css.css">
  </head>
  <body>
      <br><br>
      <form action = "" method = "POST">


  <div class="regibox">
    <h1 align ="center">Admin Dashboard</h1>
  </div>

  <div class = "absolute">
    <!-- <h3 align = "center" >Employee Management</h3> -->
    <p>Suggestions: <span id="txtHint"></span></p>
    Delete User:<input type="number" name="searchEmployee" id="search" onkeyup="showHint(this.value)">
    
    <input type="submit" class="button_search"  name="search" value="Delete" onclick="search_employee()">
  
    <button><a href="../view/admin_mngcheck.php" name ="manager_panel">Manager Info</a></button>
    <!-- <input type="button" class="button_add"  name="addEmployee" value="Add Employee" onclick="add_employee()"> -->

    <!-- <input type="button" class="button_remove"  name="removeEmployee" value="Remove Employee" onclick="remove_employee()">

    <input type="button" class="button_edit"  name="editEmployee" value="Edit Employee" onclick="edit_employee()"> -->
      <br>

      <div class="absolute">
      <table border="2">
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Religion</th>
        <th>Nationality</th>
        <th>Email</th>
        <th>Mobile No</th>
        <th>DOB</th>
        <th>Address</th>
        <th>Username</th>
    </tr>
    <?php
       $servername="localhost";
       $username="root";
       $password="";
       $dbname="ecommerce system";
       $tablename="admin";
       //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
   echo "error connecting database";
}

$sql="SELECT id,firstname,lastname,gender,religion,nationality,email,phonenumber,dob,address,username FROM $tablename ";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["gender"]."</td><td>".$row["religion"]."</td><td>".$row["nationality"]."</td><td>".$row["email"]."</td><td>".$row["phonenumber"]."</td><td>".$row["dob"]."</td><td>".$row["address"]."</td><td>".$row["username"]."</td></tr>";
    }
    echo "</table>";


}
else{
    echo "No record founds";

}
?>
</div>
//delete user
<?php
                   $servername="localhost";
                   $username="root";
                   $password="";
                   $dbname="ecommerce system";
                   $table="admin";
                    //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
   echo "error connecting database";
}

if(isset($_REQUEST['search'])){
    $id=$_REQUEST['searchEmployee'];
    $sql="DELETE FROM $table WHERE id='$id'";
    if($conn->query($sql)){
        echo "Record deleted successfully";
    }
}
  ?>


  <div class = "absolute">
 
            <table>
              <tr> <td> <a href = "https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank" >Contact with Users </td> </tr>

              <tr> <td> <a href = "https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile" target="_blank">Admin Professional Profile.'linkedin!'</a></td></tr>

              <tr> <td> <a href = "https://github.com/Sajid186" target="_blank">Admin github Profile!</a></td></tr>
            </table>
            <br>
            <table>
            <tr> <td><button><a href="../control/adminlogout.php" name ="Logout">Logout</a></button>
            </table>

</div>     
<script src="../js/admin_name.js"></script>      
  </body>
  </form>

</html>