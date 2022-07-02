<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOgIn</title>
   <link   rel="stylesheet" href="login.css">
</head>
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="login";
$conn= new mysqli($servername,$username,$password,$dbname);
// if($conn){
//     echo "succesfully connect";
// }
// else{
//     echo "failed";
// }
?>
<div class="form">




    <h1>Bubble's Cafe</h1>
    <br>
    <input class="f-input" type="email"name="email" placeholder=" Email">
    <br>
    <br>
    <input class="f-input" type="password"name="  password" placeholder="  Password">
    <br>
    <br>
    <input class="submit"   type="submit" name="submit" value="Log In">
    <br>
    <p  > <a  href="Resister.html"   > creat a new account </a></p>

    
     
</div>
</body>
</html>
