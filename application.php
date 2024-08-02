<?php
$con=mysqli_connect("localhost","root","","onlinejobs");
if (isset($_POST['insert'])) {
    $a=$_POST['firstname'];
    $b=$_POST['lastname'];
    $c=$_POST['email'];
    $dfile=rand(1000,10000)."-".$_file['file']['filecertificate'];
    $tfile=$_file['file']['filecertificate'];
    $upload="/images";
    move_uploaded_file($tfile, $upload.'/'.$dfile);

    $efile=rand(1000,10000)."-".$_file['file']['idcard_file'];
    $tefile=$_file['file']['idcard_file'];
    $uploadi="/images";
    move_uploaded_file($tefile, $uploadi.'/'.$efile);
    $insert=mysqli_query($con,"INSERT INTO application VALUES('','$a','$b','$c','$dfile','$efile')");
    if ($insert==true) {
        echo "<script>application successfull</script>";
    }else{
        echo "<script>application not successfull</script>";
    }
   
}
//// report....................................
if (isset($_POST['report'])) {
   $report=mysqli_query($con,"SELECT * FROM application");
   echo "<table border='2'>
      <tr>
      <th>ap_id</th>
      <th>firstname</th>
      <th>email</th>
      <th>filecertificate</th>
      <th>idcard_file</th>
   </tr>
    "; 
    while ($fetch=mysqli_fetch_array($report)) {
        echo "<tr>
        <td>".$fetch['ap_id']."</td>
        <td>".$fetch['lastname']."</td>
        <td>".$fetch['email']."</td>
        <td>".$fetch['filecertificate']."</td>
        <td>".$fetch['idcard_file']."</td>
        </tr>";
        }
       echo "</table>"; 
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Job Application</title>
    <style>
        /* CSS styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    <form action="" method="POST" enctype="multipart/form-data">
        <h2>Job Application</h2>
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="filecertificate">File Certificate:</label>
        <input type="file" id="filecertificate" name="filecertificate" required>

        <label for="idcard_file">ID Card File:</label>
        <input type="file" id="idcard_file" name="idcard_file" required>

        <button type="submit" name="insert">Submit</button>
        <button type="submit" name="report">report</button>
    </form>
</body>
</html>