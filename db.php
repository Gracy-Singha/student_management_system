<?php
$host="localhost";
$user="root";
$password="";
$db="collegeproject";
$data=mysqli_connect($host,$user,$password,$db);
if(!$data){
    die("connection faild");
}
?>