<?php
include("../model/buyer_db.php");


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))

{
$pname=$_POST['pname'];
$price=$_POST['price'];
//insert into database
$mydb=new db();
$conobj=$mydb->opencon();
$results=$mydb->product($conobj,"cart",$pname,$price);
if($results)
{
    echo "inserted";
}
else
{
    echo "not inserted";
}
}


}
?>