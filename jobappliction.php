<?php
  $con=mysqli_connect("localhost","root","","jobonline");
if (isset($_POST['insert'])) {
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
  // $resume="uploads/".basename($_FILES["resume"]["name"]);
  
    $job_title=$_POST['job_title'];
    $job_type=$_POST['job_type'];
    $experience=$_POST['experience'];
    $skills=$_POST['skills'];
    $img_name =$_FILES['resume']['name'];
    $tmp_name = $_FILES['resume']['tmp_name'];


    $img_upload_path = 'uploads/'.$img_name;
    $test = move_uploaded_file($tmp_name, $img_upload_path);
    echo $tmp_name;
    echo $img_upload_path;
    if($test){



    $sql =mysqli_query($con,"INSERT INTO jobseekerw VALUES ('','$fullname','$email','$phone','$img_upload_path','$job_title','$job_type','$experience','$skills','')");
if ($sql==true) {
   echo "<script>alert('Application successful')</script>";
}else{
  echo "<script>alert('Application not successful')</script>";
}  
}}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Form</title>
   <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Internal CSS */
      body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

        }
        form {
            background-color:;
            padding: 20px;
            border-radius: 8px;
            box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            max-width: 500px;
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
            border-radius: 18px;

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
         }
       
 i{
    width: 10%;
 }
    </style>
</head>
<body class="jumbotron"> 
<div>
  
</div>
    <div class="container"><a href="logout.php" class="alert alert-info" style="text-decoration: none">logaut</a>
     <center>  <form method="post" action="" enctype="multipart/form-data" class="alert alert-success">
         <i class="fa fa-user"></i> <h2 class="alert alert-success">Job Application Form</h2>
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="resume">Resume</label>
                <input type="file" class="form-control" id="resume" name="resume" required>
            </div>
            <div class="form-group">
                <label for="job_title">Job Title</label>
                <input type="text" class="form-control" id="job_title" name="job_title" required>
            </div>
            <div class="form-group">
                <label for="job_type">Job Type</label>
                <select class="form-control" id="job_type" name="job_type" required>
                    <option value="">Select Job Type</option>
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                    <option value="Contract">Contract</option>
                    <option value="Internship">Internship</option>
                </select>
            </div>
            <div class="form-group">
                <label for="experience">Experience</label>
                <input type="text" class="form-control" id="experience" name="experience" required>
            </div>
            <div class="form-group">
                <label for="skills">Skills</label>
                <input type="text" class="form-control" id="skills" name="skills" required>
            </div>
            
            <button type="submit" class="btn btn-primary" name="insert"><i class="fas fa-paper-plane"></i> Submit</button>
        </form></center> 
    </div>
</body>
</html>