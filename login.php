<?php
session_start();
$con=mysqli_connect("localhost","root","","jobonline");
if (isset($_POST['Login'])) {
    $email=$_POST['emails'];
    $password=$_POST['password'];
        $select=mysqli_query($con,"SELECT * FROM users WHERE emails='$email' AND password='$password'");
        if (mysqli_num_rows($select)==1) {
            $ses=$_session['user_id '];
            header("location:jobappliction.php");
        }
        else{
            echo "<script>alert('invalid input')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
           
        }
        .input-box input {
            width: 100%;
            height: 50px;
            background-color: white;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 40px;
            font-size: 16px;
            padding: 15px;
            text-align: center;
        }

        .input-box {
            margin-bottom: 20px;
        }

        .fa {
            position: absolute;
            right: 15px;
            top: 17px;
            color: #6c757d;
        }
        .input-box i{
            float: left;
            margin-top: -25px;
            margin-left:1.5%;
            transform: translateY(-80%);
    font-size: 14px;
        }
        .a{
            text-decoration: none;
            color: blue;
        }
        #card{
            margin: 25% 90% 0%;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="post" class="alert alert-primary p-4">
                    <legend class="mb-4">Login Account</legend>
                    <div class="input-box">
                        <input type="email" name="emails" class="form-control" placeholder="Email" required>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" class="form-control" placeholder="Password (8 characters)" required minlength="8" maxlength="8">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox"> Remember</label>
                        <a href="#">Forgot password</a>
                    </div>
                   <center> <input type="submit" name="Login" value="Login" class="btn btn-warning btn-block"><li class="fa fa-submit"></li></center>
                   
                </form>
            </div>
        </div>
    </div>
</body>
</html>