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
    echo "error connecting database";
}
return $conn;
    }
 function insertbuyer($f_name,$mail,$u_name,$phn_number,$age,$pass,$confirm_pass,$gender,$table,$conn){

        
        $sqlstr="INSERT into $table(full_name,email,username,phone,dob,password,confirm_pass,gender) VALUES ('$f_name','$mail','$u_name','$phn_number','$age','$pass','$confirm_pass','$gender')";
        if($conn->query($sqlstr)){
           
            header("Location:../view/buyer_login.php");
        }
        else{
            echo "cannot insert Because of the error =".$conn->error;//error debug using this property
        }
            }
        
            
        function checklogin($conn,$tablename,$u_name,$pass){
            $sqlstr="SELECT username,password FROM $tablename WHERE username='$u_name' AND password='$pass'";
            return $conn->query($sqlstr);
    
        }
        function searchadmin($conn,$tablename,$adminname){
            $sqlstr="SELECT * FROM $tablename WHERE admin_name='$adminname'";
            return $conn->query($sqlstr);
        }
        function searchadminemail($conn,$tablename,$adminemail){
            $sqlstr="SELECT * FROM $tablename WHERE email='$adminemail'";
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
        function product($conn,$tablename,$pname,$price)
        {
            $sqlstr="INSERT into $tablename(pname, price) VALUES ('$conn','$tablename','$pname','$price')";
            return $conn->query($sqlstr);
        }
        


        

        


    }    
        



?>