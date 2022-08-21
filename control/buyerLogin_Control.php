<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
include("buyer_process.php");
$x=0;
$usernameError="";
$userPass_Error="";
$customer_data = file_get_contents('../data/buyer_data.json');
$decoded_data = json_decode($customer_data);

if (isset($_POST["submitlogin"])) 
{
    $username=$_REQUEST["username"];
            $userpassword=$_REQUEST["userpass"];
    foreach ($decoded_data as  $key => $udata) {
        if (($udata->User_name == $_POST["uname"] || $udata->Email==$_POST["uname"]) && $udata->Password == $_POST["password"]) {

            $_SESSION["User_name"] = $_POST["uname"];
            $_SESSION["email"]=$_POST["mail"];
            $_SESSION["Password"] = $_POST["password"];
             if (!empty($_SESSION["User_name"]))
             {
                header("Location: ../view/buyer_dashboard.php");
             }
        }
        if(empty($_REQUEST["uname"])||(empty($_REQUEST['password'])))
            {
                $usernameError= "Enter your user name and password !";
            }
            else{

                $x++;

            }   
            if($x==1){
                $mydb=new db();
                $conobj=$mydb->opencon();
                $results=$mydb->checklogin($conobj,"buyer",$_POST["uname"],$_POST["password"]);
                if($results->num_rows>0){
                    $_SESSION["User_name"] = $_POST["uname"];
                    $_SESSION["Password"] = $_POST["password"];

                   if (!empty($_SESSION["User_name"]))
                  {
                    header("Location: ../view/buyer_dashboard.php");
                  }
                 
            }
                else{
                    echo "User not found<br>";
                }
            }
        }
        
    // if($hasError==1){
    //     $userPass_Error= "Your username or password is incorrect !";
    // }
}

