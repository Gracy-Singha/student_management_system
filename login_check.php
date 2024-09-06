<?php
error_reporting(0);
session_start();
require("./db.php");

if($data===false)
{
    die("connection error");
}
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $email = $_POST['username'];
        $pass = $_POST['password'];
        $sql = "SELECT * from users where email ='".$email."'AND password='".$pass."'";
        $result=mysqli_query($data,$sql);
        $row=mysqli_fetch_array($result);
        if($row["usertype"]=="student")
        {
            $_SESSION['username']=$email;
            $_SESSION['usertype']="stuedent";
            header("location:studenthome.php");
        }
        elseif($row["usertype"]=="admin")
        {
            $_SESSION['username']=$email;
            $_SESSION['usertype']="admin";
            header("location:adminhome.php");
        }
        else{
            $messege="<center>Username or password do not match</center>";
            $_SESSION['loginMessage']=$messege;
            header("location:login.php");
        }
    }
?>