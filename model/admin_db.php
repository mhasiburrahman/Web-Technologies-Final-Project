<?php
class db{
    function opencon(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="ecommerce system";
        //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
    echo "database connection error";
}
return $conn;
    }
 function insertadmin($admin_fname,$admin_lname,$gender,$religion,$admin_natnlty,$admin_email,$admin_phnnum,$admin_dob,$address,$admin_set_uname,$admin_set_pass,$admin_conifrm_pass,$table,$conn){
 
        $sqlstr="INSERT into $table(firstname,lastname,gender,religion,nationality,email,phonenumber,dob,address,username,password,confirmpass) VALUES ('$admin_fname','$admin_lname','$gender','$religion','$admin_natnlty','$admin_email','$admin_phnnum','$admin_dob','$address','$admin_set_uname','$admin_set_pass','$admin_conifrm_pass')";

        if($conn->query($sqlstr)){
           
            header("Location:../view/adminlogin.php");
        }
        else{
            echo "cannot insert Because of the error =".$conn->error;//error debug using this property
        }
            }
        
            
        function checklogin($conn,$tablename,$admin_set_uname,$admin_set_pass){
            $sqlstr= "SELECT username,password FROM $tablename WHERE username='$admin_set_uname' AND password='$admin_set_pass'";
            return $conn->query($sqlstr);
    
        }
        function searchadmin($conn,$tablename,$adminname){
            $sqlstr="SELECT * FROM $tablename WHERE username='$admin_set_uname'";
            return $conn->query($sqlstr);
        }

        function Updateprofile($conn,$tablename,$admin_email,$password,$confirm_password){
        
            $sqlstr="UPDATE $tablename SET password='$password',confirm_password='$confirm_password'  WHERE email='$admin_email'";
            return $conn->query($sqlstr);
        }
        
        function Deleteadmin($conn,$tablename,$admin_name){
            $sqlstr="DELETE FROM $tablename WHERE admin_name='$admin_name'";
            return $conn->query($sqlstr);
        }
       
        function connclose($conn){
            return $conn->close();
        }
        
    }    
        
?>