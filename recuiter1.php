<?php
$con=mysqli_connect("localhost","root","","jobonline");
if (isset($_POST['insert'])) {
    $CompanyName=$_POST['CompanyName'];
    $email=$_POST['email'];
    $tel=$_POST['telephone'];
        $create=mysqli_query($con,"INSERT INTO recruiter VALUES('','$CompanyName','$email','$tel')");
        if($create==true){
            echo "SUCCESSSFUL TO REGISTER";
        }
        else{
            echo " NOT SUCCESSSFUL TO REGISTER";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recruiter Registration</title>
  <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-group i {
      margin-right: 5px;
    }

    .btn i {
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <div class="container my-5">
    <h1 class="text-center mb-4">Recruiter Registration</h1>
    <form method="POST">
      <div class="form-group">
        <label><i class="fas fa-building"></i> Company Name</label>
        <input type="text" class="form-control" name="CompanyName" required>
      </div>
      <div class="form-group">
        <label><i class="fas fa-envelope"></i> Email</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="form-group">
        <label><i class="fas fa-phone"></i> Telephone</label>
        <input type="text" class="form-control" name="telephone" required>
      </div>
      <button type="submit" class="btn btn-primary" name="insert"><i class="fas fa-sign-in-alt"></i> Register</button>
    </form>
  </div>
</body>
</html>