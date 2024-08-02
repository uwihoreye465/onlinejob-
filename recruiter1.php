<?php
$con=mysqli_connect("localhost","root","","jobonline");
if (isset($_POST['insert'])) {
    $CompanyName=$_POST['CompanyName'];
    $email=$_POST['email'];
    $tel=$_POST['telephone'];
        $create=mysqli_query($con,"INSERT INTO recruiter VALUES('','$CompanyName','$email','$tel')");
        if($create==true){
             echo "<script>alert('SUCCESSSFUL TO REGISTER')</script>";
        }
        else{
          echo "<script>alert('Failed SUCCESSSFUL TO REGISTER')</script>";
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
            font-family: Arial, sans-serif;
            padding: 20px;

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
        button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
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
    #siz{
      font-size: 17pt;
      color: white;
      background-color: black;
    }
  </style>
</head>
<body>
  <div class="container my-5">
    <button class="btn btn-dark"> <a href="dash.php">Back</a></button>
    <form method="POST"><h1 class="text-center mb-4" id="siz">Recruiter Registration</h1>
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