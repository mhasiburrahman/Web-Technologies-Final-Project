<?php
include("../control/buyerSession_check.php");
include("../control/buyerCookie.php");

// include("../control/buyer_cart.php");




// if($_SERVER["REQUEST_METHOD"]=="POST")
// {
//     if(isset($_POST['purchase']))

// {
// $pname=$_POST['pname'];
// $price=$_POST['price'];
// //insert into database
// $mydb=new db();
// $conobj=$mydb->opencon();
// $results=$mydb->product($conobj,"cart",$pname,$price);
// if($results)
// {
//     echo "inserted";
// }
// else
// {
//     echo "not inserted";
// }
// }


// }


?>
<html lang="en">
<head>
<link rel="stylesheet"  href="../css/mystyle.css">
<!-- //jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer dashboard</title>
    <link rel="stylesheet"  href="../css/cart.css">
</head>
<body>
    <header>
            <h2 align="center">Ecommerce System </h2><hr>
    </header>
    <!-- jquery -->
    <div id="flip">Click to slide down panel</div>
<div id="panel"><a href="buyer_profile.php">Profile</a><br><br>
<a href="../control/buyer_logout.php" name ="Logout">Logout</a>
</div>
<br> <br>
   
        
    
        
<form method="post">
    

        <div class="container">
        <div class="card">
         
            <div class="card-text">
                <p name="pname">Laptop</p>
                <p name="price">Price: $500</p>
              
                <img src="../uploads/laptop.jpg" width="200" height="200">
                <button class="butt" id="b1" name="purchase">Purchase</button>
            </div>
        </div>

        <div class="card">
           
            <div class="card-text">
            <p name="pname">Mobile</p>
                <p name="price">Price: $100</p>
              
               <tr><td> <img src="../uploads/mobile.jpg" width="200" height="200"></td></tr>
                <button class="butt" id="b2">Purchase</button>
            </div>
        </div>

        <div class="card">
            
            <div class="card-text">
            <p name="pname">Shirt</p>
                <p name="price">Price: $20</p>
             
                <img src="../uploads/shirt.jpg" width="200" height="200">
                <button class="butt" id="b3">Purchase</button>
            </div>
        </div>

        <div class="card">
         
            <div class="card-text">
            <p name="pname">Shoe</p>
                <p name="price">Price: $60</p>
              
                <img src="../uploads/shoe.jpg" width="200" height="200">
                <button class="butt" id="b4">Purchase</button>
            </div>
        </div>
    </div>   
    
    </form>   
    <script src="../js/buyer_reg_js.js"></script>
</body>
</html>