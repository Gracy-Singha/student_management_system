<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styls.css">
    <title>Login Form</title><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>
<body background="https://media.istockphoto.com/vectors/university-campus-building-hall-education-for-students-cartoon-vector-vector-id1167900150?k=6&m=1167900150&s=170667a&w=0&h=fAgKGy8jBEeWaO0I5XjwNTQWSHEBZmBJ2JP_hB9z96U=" class="body_deg">
    <h1 align="center">Login Form</h1>
    <h4>
        <?php
        error_reporting(0);
        session_start();
        session_destroy();
        echo $_SESSION['loginMessage'];
        ?>
    </h4>
    <center>
        <div class="form_deg">
            <form action="login_check.php" method="POST" class="login_form">
                <div>
                    <label class="label_deg">Username</label>
                    <input type="email" name="username">
                </div>
                <div>
                    <label class="label_deg">Password</label>
                    <input type="password" name="password">
                </div>
                <div class="login">
                    <input class="btn btn-primary" type="Submit" name="submit" value="login">
                </div>
            </form>
        </div>
    </center>
</body>
</html>

