
<?php
$con=mysqli_connect("localhost","root","","jobonline");
if (isset($_POST['insert'])) {
  $a=$_POST['RecruiterID'];
  $b=$_POST['jobTitle'];
  $c=$_POST['Description'];
  $d=$_POST['Salary'];
  $f=$_POST['joblocation'];
  $e=$_POST['jobstart'];
  $insert=mysqli_query($con,"INSERT INTO job VALUES('$a','$a','$b','$c','$d','$f','$e')");
  if ($insert==true) {
   echo "<script>alert('job are added')</script>";
  }else{
    echo "<script>alert('job not added')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Job Listing</title>
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS styling */
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
<fieldset id="fildset" class="">
<button class="btn btn-dark"> <a href="dash.php">Back</a></button><div class="container">
    
    <form action="" method="post"><h2 class="mb-4 alert alert btn-primary">Add Job Listing</h2>
    <div class="form-group">
            <label>RecruiterID:</label>
            <input type="number" name="RecruiterID" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Job Title:</label>
            <input type="text" name="jobTitle" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea type="text" name="Description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Salary:</label>
            <input type="number" name="Salary" class="form-control" required>
        </div>
       
         <div class="form-group">
            <label>Job Location:</label>
            <input type="text" name="joblocation" class="form-control" required>
        </div>
             <div class="form-group">
            <label>Job Start Date:</label>
            <input type="date" name="jobstart" class="form-control" required>
        </div>
        <button type="submit" name="insert" class="btn btn-primary">Add Job</button>
    </form>
</div>
</fieldset>
</body>
</html>

?>