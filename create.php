<?php
$con=mysqli_connect("localhost","root","","jobonline");
if (isset($_POST['create'])) {
    $card=$_POST['id_card'];
    $email=$_POST['emails'];
    $password=$_POST['password'];
    if(strlen($card)!==16){
            echo "<script>alert('ID Card must be 16 digits long')</script>";
    } else {
    $insert=mysqli_query($con,"INSERT INTO USERS VALUES('','$card','$email','$password')");
    if ($insert==true) {
     echo "<script>alert('user Registered') </script>";  
    }else{
        echo "<script>alert ('user not Registered')</script>";  
    }}}
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
            color: black;
            transform: translateY(-80%);
    font-size: 14px;
        }
        .a{
            text-decoration: none;
            color: blue;
        }
         #card{
            margin: 14% 90% 0%;
            color: black;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="post" class="alert alert-primary p-4">
                    <legend class="mb-4">Create Account</legend>
                    
                    <div class="input-box">
                        <input type="number" name="id_card" class="form-control" placeholder="ID Card (16 digits)" required>
                        <i class="fa fa-id-card" id="card"></i>
                    </div>
                    <div class="input-box">
                        <input type="email" name="emails" class="form-control" placeholder="Email" required>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" class="form-control" placeholder="Password (8 characters)" required minlength="8" maxlength="8">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember</label>
                        <a href="#">Forgot password</a>
                    </div>
                    <input type="submit" name="create" value="Create Account" class="btn btn-warning btn-block">
                    <button class="btn btn-light"><a href="login.php" class="a">LOGIN</a></button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>