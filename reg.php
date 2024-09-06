<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require("./db.php");
    $username=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $password=$_POST["pass"];
    $cpassword=$_POST["cpass"];
 
        if($password==$cpassword){
                try {
                    $sql="INSERT INTO users (username,phone,email,password) VALUES ('$username','$phone','$email','$password')";
                    $result=mysqli_query($data,$sql);
                    if($result)
                       session_start();
                       $_SESSION["registered"]=true;
                       header("location:./login.php");
                }catch (Exception $th) {
                        echo "You are using duplecate emailid";
                        echo "<h1><a href='./reg.php' >TRY AGAIN</a>";
                }
        }else{
             echo "Password and Confirm Password does not match";
            }
    } 
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./reg.css">
</head>
<body>
   
<center>
    <form class="form" action="./reg.php" method="POST">
        <p class="title">Register </p>
        <h1>Signup now</h1>
        <label>
            <input class="input" type="text" name="name" placeholder="" required="">
            <span>Username</span>
        </label>
                
        <label>
            <input class="input" type="email" name="email" placeholder="" required="">
            <span>Email</span>
        </label> 
            
        <label>
            <input class="input" type="text" name="phone" placeholder="" required="">
            <span>Phone</span>
        </label>
        <label>
            <input class="input" type="password" name="pass" placeholder="" required="">
            <span>Password</span>
        </label>
        <label>
            <input class="input" type="password" name="cpass" placeholder="" required="">
            <span>Confirm password</span>
        </label>
        <button class="submit">Submit</button>
        <p class="signin">Already have an acount ?<a href="./login.php">Login In</a></p>
    </form>
</center>
</body>
</html>