<?php

require("./db.php");

if($_GET['email'])
{
    $user_id=$_GET['email'];
    $sql="DELETE FROM users WHERE email='$user_id' ";
    $result=mysqli_query($data,$sql);
    if($result)
    { 
        $_SESSION['message']='Delete Student is Successful';
        header("location:view_student.php");
    }
}
?>