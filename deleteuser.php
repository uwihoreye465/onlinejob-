<?php
$con=mysqli_connect("localhost","root","","jobonline");
if (isset($_POST['delete'])) {
    $a=$_POST['user_id'];
    $b=$_POST['id_card'];
    $c=$_POST['emails'];
    $d=$_POST['password'];
        $delete=mysqli_query($con,"DELETE FROM users WHERE user_id='$a'");
    if ($delete==true) {
        echo "<script>alert('user are delete')</script>";
     } else{
       echo "<script>alert('failed to delete')</script>";
            }
     }
     ?>
      <?php
       $con=mysqli_connect("localhost","root","","jobonline");
       $a1=$b1=$c1=$d1='';
if (isset($_POST['create'])) {
    $a=$_POST['user_id'];
    $b=$_POST['id_card'];
    $c=$_POST['emails'];
    $d=$_POST['password'];
        $select=mysqli_query($con,"SELECT * FROM USERS WHERE user_id='$a'");
        if (mysqli_num_rows($select)>0) {
            while ($fertch=mysqli_fetch_array($select)) {
    $a1=$fertch['user_id'];
    $b1=$fertch['id_card'];
    $c1=$fertch['emails'];
    $d1=$fertch['password']; 
    if ($select==true) {
         echo "user looked";
     } else{
        echo "user not looked";
            }
     }
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
            font-family: Arial, sans-serif;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
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
            margin-top: -35px;
            margin-left:2.5%;
            padding-left: 1px
            transform: translateY(-80%);
            color: blue;
    font-size: 14px;
        }
        .a{
            text-decoration: none;
            color: blue;
        }
        #card{
            margin: 40% 85% 0%;
            color: blue;
        }
        .th{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="POST" class="alert alert-primary p-4">
                    <legend class="mb-4">Delete users</legend>
                    <div class="input-box">
                        <input type="number" name="user_id" class="form-control" placeholder="user_id" value="<?php echo "$a1";?>">
                        <i class=""></i>
                    </div>
                    <div class="input-box">
                        <input type="number" name="id_card" class="form-control" placeholder="ID Card (16 digits)" value="<?php echo "$b1";?>">
                        <i class="fa fa-id-card" id="card"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" name="emails" class="form-control" placeholder="Email" value="<?php echo "$c1";?>">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" class="form-control" placeholder="Password (8 characters)"  value="<?php echo "$d1";?>">
                        <i class="fas fa-lock"></i>
                    </div>
                    <input type="submit" name="create" value="select" class="btn btn-primary btn-block">
                 <input type="submit" name="delete" value="delete" class="btn btn-warning btn-block">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

