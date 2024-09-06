<?php
error_reporting(0);
session_start();
session_destroy();
if($_SESSION['message'])
{
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styls.css">
    <title>Student Manegment System</title>
    <link
      rel="shortcut icon"
      href="icon.jpeg"
      type="image/x-icon"
    />
</head>
<body>

<!-- navbar -->
    <nav>
        <label class="logo">ABC INSTITUTE OF TECHNOLOGY</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Features</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">About</a></li>
            <li><a href="login.php" class="btn btn-success">Log in</a></li>
            <li><a href="reg.php" class="btn btn-success">Reg in</a></li>
        </ul>
    </nav>

<!-- front -->
    <div class="section1">
        <h1 class="text"><center>We Teach Student With Care</center></h1>
        <img class="main_img" src="front.jpeg">
    </div>

<!-- slides -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="slide1.jpg" class="d-block w-100" alt="...">
     </div>
     <div class="carousel-item">
       <img src="slide2.jpg" class="d-block w-100" alt="...">
     </div>
     <div class="carousel-item">
       <img src="slide3.jpg" class="d-block w-100" alt="...">
     </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- welcome -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="https://tse3.mm.bing.net/th?id=OIP.ldsNHe-9bkYunQNEOFXN4QHaFj&pid=Api&P=0&h=180" alt="" class='welcome_img'>
            </div>
            <div class="col-md-8">
                <h1>Welcome To ABC Institute of Technology</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero non ducimus aspernatur quaerat voluptatem. Natus omnis libero dignissimos pariatur iure quas harum fugiat rerum porro, nam exercitationem consequatur, dolores provident.</p>
            </div>
        </div>
    </div>

<!-- teacher section -->
<center>
    <h1>Our Teachers</h1>
</center>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="teacher" src="teacher1.jpeg" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore numquam ab velit minus provident obcaecati sed nisi ad, enim corporis at dicta, vitae soluta assumenda quod facilis mollitia esse deleniti?</p>
        </div>
        <div class="col-md-4">
        <img class="teacher" src="teacher2.jpeg" alt="">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti iste aspernatur dolores, cum expedita ullam saepe nemo consequuntur necessitatibus quis culpa dignissimos deserunt eius quidem, eos tenetur rerum provident magni?</p>
        </div>
        <div class="col-md-4">
        <img class="teacher" src="teacher3.jpeg" alt="">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti iste aspernatur dolores, cum expedita ullam saepe nemo consequuntur necessitatibus quis culpa dignissimos deserunt eius quidem, eos tenetur rerum provident magni?</p>
        </div>
    </div>
</div>

<!-- cource section -->
<center>
    <h1 class="student">Our Cources</h1>
</center>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="courcess" src="cse.jpeg" alt="">
            <h3>Computer Science and Engineering</h3>
        </div>
        <div class="col-md-4">
            <img class="courcess" src="csbs.jpeg" alt="">
            <h3>Computer Science and Business Systems</h3>
        </div>
        <div class="col-md-4">
            <img class="courcess" src="ee.jpeg" alt="">
            <h3>Electronics Engineering</h3>
        </div>
        <div class="col-md-4">
            <img class="courcess" src="ece.jpeg" alt="">
            <h3>Electronics and Communication Engineering</h3>
        </div>
        <div class="col-md-4">
            <img class="courcess" src="me.jpeg" alt="">
            <h3>Mechanical Engineering</h3>
        </div>
        <div class="col-md-4">
            <img class="courcess" src="ce.jpeg" alt="">
            <h3>Civil Engineering</h3>
        </div>
    </div>
</div> 

<!-- admission form -->
<center>
    <h1 class="adm">Admission Form</h1>
</center>
<div align="center" class="admission_form">
    <form action="data_check.php" method="POST">
        <div class="adm_int">
            <label class="label_text">Name</label>
            <input class="input_deg" type="text" name="name">
        </div>
        <div class="adm_int">
            <label class="label_text">Email</label>
            <input class="input_deg" type="text" name="email">
        </div>
        <div class="adm_int">
            <label class="label_text">Phone</label>
            <input class="input_deg" type="text" name="phone">
        </div>
        <div class="adm_int">
            <label class="label_text">Message</label>
            <textarea class="input_txt" type="text" name="message"></textarea>
        </div>
        <div class="adm_int">
            <input class="btn btn-primary" id="submit" type="submit" value="Apply" name="apply">
        </div>
    </form>
</div>

<!-- footer -->
 <footer >
    <h5 class="footer_text">All @copyright reserved by web tech knowledge</h5>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
