<?php
$con = mysqli_connect("localhost", "root", "", "jobonline");
$i1 = $a1 = $b1 = $c1 = $d1 = $f1 = $e1 = '';

if (isset($_POST['select'])) {
    $i = $_POST['JobID'];
    $b = $_POST['jobTitle'];
    $c = $_POST['Description'];
    $d = $_POST['Salary'];
    $f = $_POST['joblocation'];
    $e = $_POST['jobstart'];

    // Escape user inputs to prevent SQL injection
    $i = mysqli_real_escape_string($con, $i);
    $b = mysqli_real_escape_string($con, $b);
    $c = mysqli_real_escape_string($con, $c);
    $d = mysqli_real_escape_string($con, $d);
    $f = mysqli_real_escape_string($con, $f);
    $e = mysqli_real_escape_string($con, $e);

    $select = mysqli_query($con, "SELECT * FROM job WHERE JobID = '$i'");

    if (mysqli_num_rows($select) > 0) {
        while ($fet = mysqli_fetch_assoc($select)) {
            $i1 = $fet['JobID'];
            $b1 = $fet['jobTitle'];
            $c1 = $fet['Description'];
            $d1 = $fet['Salary'];
            $f1 = $fet['joblocation'];
            $e1 = $fet['jobstart'];
        }
        echo "<script>alert('Job is selected')</script>";
    } else {
        echo "<script>alert('Job is not selected')</script>";
    }
}

//................upddate......................
if (isset($_POST['update'])) {
  $i=$_POST['JobID'];
  $b=$_POST['jobTitle'];
  $c=$_POST['Description'];
  $d=$_POST['Salary'];
  $f=$_POST['joblocation'];
  $e=$_POST['jobstart'];
  $insert=mysqli_query($con,"UPDATE job SET jobTitle='$b',Description='$c',Salary='$d',joblocation='$f',jobstart='$e' WHERE JobID='$i'");
  if ($insert==true) {
   echo "<script>alert('job are edited')</script>";
  }else{
    echo "<script>alert('job not edited')</script>";
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
    
    <form action="" method="post"><h2 class="mb-4 alert alert btn-primary">Edit Job Listing</h2>
    <div class="form-group">
            <label>JobID:</label>
            <input type="number" name="JobID" class="form-control" value="<?php echo "$i1";?>">
        </div>
        <div class="form-group">
            <label>Job Title:</label>
            <input type="text" name="jobTitle" class="form-control" value="<?php echo "$b1";?>">
        </div>
       <div class="form-group">
    <label>Description:</label>
    <textarea name="Description" class="form-control"><?php echo $c1; ?></textarea>
</div>
        <div class="form-group">
            <label>Salary:</label>
            <input type="number" name="Salary" class="form-control" value="<?php echo "$d1";?>">
        </div>
       
         <div class="form-group">
            <label>Job Location:</label>
            <input type="text" name="joblocation" class="form-control" value="<?php echo "$f1";?>">
        </div>
             <div class="form-group">
            <label>Job Start Date:</label>
            <input type="date" name="jobstart" class="form-control" value="<?php echo "$e1";?>">
        </div>
        <button type="submit" name="select" class="btn btn-primary">seach</button>
        <button type="submit" name="update" class="btn btn-primary">update</button>
    </form>
</div>
</fieldset>
</body>
</html>