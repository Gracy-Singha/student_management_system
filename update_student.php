<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}
require("./db.php");
$id=$_POST['email'];
$sql="SELECT * FROM users WHERE email='$id' ";
$result=mysqli_query($data,$sql);
$info=$result->fetch_assoc();
  
if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $query="UPDATE users SET username='$name',email='$email',phone='$phone',password='$password' WHERE email='$id' ";

    $result2=mysqli_query($data,$query);

    if($result2)
    {
        header("location:view_student.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <?php
    include 'admin_css.php';
    ?>
    <style type="text/css">
        label{
            display: inline-block;
            width: 100px;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .div_deg{
            background-color: rgb(194, 240, 154);
            width: 400px;
            padding-bottom: 70px;
            padding-top: 70px;
        }
    </style>
</head>
<body>
<?php
    include 'admin_sidebar.php';
    ?>
    
    <div class="content">
        <center>
        <h1>Update Student</h1>
        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label for="">Username</label>
                    <input type="text" name="name" value="<?php echo $info['username'] ?>">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email"  value="<?php echo $info['email'] ?>">
                </div>
                <div>
                    <label for="">Phone</label>
                    <input type="number" name="phone" value="<?php echo $info['phone'] ?>">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="password" name="password" value="<?php echo $info['password']?>">
                </div>
                <div>
                    <input class="btn btn-success" type="submit" name="update" value="Update">
                </div>
            </form>
        </div>
        <center>
    </div>
</body>
</html>