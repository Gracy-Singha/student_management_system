<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='teacher')
{
    header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="collegeproject";
$data=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['teacher']))
{
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_password=$_POST['password'];
    $usertype="teacher";


    $sql = "INSERT INTO `teacher`(`username`, `email`, `phone`, `password`) VALUES ('$username', '$user_email', '$user_phone', '$user_password', '$usertype')";
    $result = mysqli_query($data, $sql);


    if($result)
    {
        echo "<script type='text/javascript'>
        alert('Data Upload Success');
        window.location.href='teacher.php';
        </script>";
    }
    else{
        echo "Upload Failed";
    }
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <style type="text/css">
        label
        {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .div_deg{
            background-color: rgb(194, 240, 154);
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
    <?php
    include 'admin_css.php';
    ?>
</head>
<body>
<?php
    include 'admin_sidebar.php';
    ?>
    
    <div class="content">
        <center>
        <h1>Add Teacher</h1>
        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label>username</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label>Phone</label>
                    <input type="number" name="phone">
                </div>
                <div>
                    <label>Password</label>
                    <input type="text" name="password">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" name="teacher" value="Add Teacher">
                </div>
            </form>
        </div>
        </center>
    </div>
</body>
</html>