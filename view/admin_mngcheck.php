</div>
<html>
  <head>
    <title>Ecommerece System</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_mngchk.css">
  </head>
  <body>
      <br><br>
      <div class="absolute">

        <h2>Manager Information<h2>
     <table border="2" >       
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Mobile No</th>
        <th>Email</th>
        <th>Username</th>
    </tr>
    <?php
       $servername="localhost";
       $username="root";
       $password="";
       $dbname="ecommerce system";
       $tablename="manager";
        //create connection
       //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
   echo "error connecting database";
}

$sql="SELECT id,firstname,lastname,gender,dob,phone,email,username FROM $tablename ";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["username"]."</td></tr>";
    }
    echo "</table>";


}
else{
    echo "No record founds";

}


?>


<?php
                   $servername="localhost";
                   $username="root";
                   $password="";
                   $dbname="ecommerce system";
                   $table="manager";
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
  
  <button><a href="../view/adminprofile.php" name ="manager_panel">< Back</a></button>

</div>
</div>
</body>