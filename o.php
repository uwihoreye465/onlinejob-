  move_uploaded_file($_FILES["resume"]["tmp_name"], $resume);
<?php
$con=mysqli_connect("localhost","root","","jobonline");
if (isset($_POST['update'])) {
  $a=$_POST['RecruiterID'];
    $b=$_POST['CompanyName'];
    $c=$_POST['email'];
    $d=$_POST['telephone'];
        $pdate=mysqli_query($con,"UPDATE  recruiter SET CompanyName='$b',email='$c',telephone='$d' where RecruiterID='$a'");
        if($pdate==true){
            echo "SUCCESSSFUL to edited";
        }
        else{
            echo " NOT SUCCESSSFUL to edited";
        }
    }
    //...................select...................................
           $a1=$b1=$c1=$d1='';
if (isset($_POST['select'])) {
    $a=$_POST['RecruiterID'];
    $b=$_POST['CompanyName'];
    $c=$_POST['email'];
    $d=$_POST['telephone'];
        $select=mysqli_query($con,"SELECT * FROM recruiter WHERE RecruiterID='$a'");
        if (mysqli_num_rows($select)>0) {
            while ($fertch=mysqli_fetch_array($select)) {
    $a1=$fertch['RecruiterID'];
    $b1=$fertch['CompanyName'];
    $c1=$fertch['email'];
    $d1=$fertch['telephone']; 
    if ($select==true) {
         echo "recruiter looked";
     } else{
        echo "recruiter not looked";
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
  <div class="container my-5">RecruiterID
    
    <form method="POST"><h1 class="text-center mb-4" id="siz">Recruiter Registration</h1>
      <div class="form-group">
        <label><i class="fas fa-building"></i> RecruiterID</label>
        <input type="number" class="form-control" name="RecruiterID" value="<?php echo "$a1";?>">
      </div>
        <label><i class="fas fa-building"></i> Company Name</label>
        <input type="text" class="form-control" name="CompanyName" value="<?php echo "$b1";?>">
      </div>
      <div class="form-group">
        <label><i class="fas fa-envelope"></i> Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo "$c1";?>">
      </div>
      <div class="form-group">
        <label><i class="fas fa-phone"></i> Telephone</label>
        <input type="text" class="form-control" name="telephone" value="<?php echo "$d1";?>">
      </div>
      <button type="submit" class="btn btn-primary" name="update"><i class="fas fa-sign-in-alt"></i>update</button>
      <button type="submit" class="btn btn-primary" name="select"><i class="fas fa-sign-in-alt"></i> select</button>
    </form>
  </div>
</body>
</html>




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
else{
    echo "not done";
}
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
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="" enctype="multipart/form-data">
        <h2 class="alert alert-success">Job Application Form</h2>
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
        </form>
    </div>
</body>
</html>