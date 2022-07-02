<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOgIn</title>
    <link rel="stylesheet" href="login.css" />
</head>

<body>


<!-- connecting to mysql server  -->
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

<!-- checking validity and sending user input to server  -->
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conf_password=$_POST['conf_password'];
   

   if($name !=="" && $email !=="" && $password !=="" && $conf_password !==""){
    if($password == $conf_password){

        $register_query= "INSERT INTO register ( name, email,password)VALUES('$name','email','$password') ";
        $register_result=mysqli_query($conn,$register_query);
        if($register_result){
           echo header('Location :logiin.php');
        } 
        else{
            echo "resister failed try again";
        }
    }
    else{
        echo "confirm password doesent match !";
    }

   }
    else{
        echo "all fields must filled";
    }

}
?>


    <form action="#" method="POST">
        <div class="form">
            <h1>Bubble's Cafe</h1>
            <br />
            <input class="f-input" type="name" name="name" placeholder=" Full name" />
            <br />
            <br />
            <input class="f-input" type="email" name="email" placeholder=" Email" />
            <br />
            <br />
            <input class="f-input" type="password" name="  password" placeholder="  Password" />
            <br />
            <br />
            <input class="f-input" type="password" name="  conf_password" placeholder=" conform Password" />
            <br />
            <br />
            <a href="logiin.html">
                <input class="submit" type="submit" name="submit" value="Resister Account" /></a>
            <br />
            <p><a href="logiin.html"> Already have an account </a></p>
        </div>
    </form>
</body>

</html>