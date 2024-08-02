<?php
$con=mysqli_connect("localhost","root","","onlinejobs");
if (isset($_POST['insert'])) {
    $RID=$_POST['RecruiterID'];
    $CompanyName=$_POST['CompanyName'];
    $email=$_POST['emails'];
    $tel=$_POST['telephone'];
        $create=mysqli_query($con,"INSERT INTO recruiter VALUES('$RID','$CompanyName','$email','$tel','')");
        if($create==true){
            echo "SUCCESSSFUL TO REGISTER";
        }
        else{
            echo " NOT SUCCESSSFUL TO REGISTER";
        }
    }
    #......................select.....................
    $a1=$b1=$c1=$d1='';
    if (isset($_POST['select'])) {
    $a=$_POST['RecruiterID'];
    $b=$_POST['CompanyName'];
    $c=$_POST['emails'];
    $d=$_POST['telephone'];
$sel=mysqli_query($con,"SELECT * FROM recruiter where RecruiterID='$a'");
if (mysqli_num_rows($sel)>0) {
    while ($fetch=mysqli_fetch_array($sel)) {
    $a1=$fetch['RecruiterID'];
    $b1=$fetch['CompanyName'];
    $c1=$fetch['emails'];
    $d1=$fetch['telephone']; 
    if ($sel==true){
        echo "selected";
    }
    else{
        echo "not selected";
    }
    }  
    }
}
//.........................report..........................
 if (isset($_POST['report'])) {
    $report=mysqli_query($con,"SELECT * FROM recruiter"); 
    if (mysqli_num_rows($report)>0) {
       echo "<table border='2'>
       <tr>
       <th>RecruiterID</th>
       <th>CompanyName</th>
       <th>emails</th>
       <th>telephone</th>
       </tr>";
       while ($fetch=mysqli_fetch_array($report)) {
           echo "<tr>
           <td>".$fetch['RecruiterID']."</td>
           <td>".$fetch['CompanyName']."</td>
           <td>".$fetch['emails']."</td>
           <td>".$fetch['telephone']."</td>
           </tr>";
       }
       echo "</table>";
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
            margin-top: -3;
            padding-left: 1px
            transform: translateY(-80%);
    font-size: 14px;
        }
        .a{
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="post" class="alert alert-primary p-4">
                    <legend class="mb-4">RECUITER REGISTER</legend>
                    
                    <div class="input-box">
                        <input type="number" name="RecruiterID" class="form-control" placeholder="RecruiterID " value="<?php echo "$a1";?>">
                    </div>
                      <div class="input-box">
                        <input type="text" name="CompanyName" class="form-control" placeholder="CompanyName" value="<?php echo "$b1";?>">
                    </div>
                    <div class="input-box">
                        <input type="text" name="emails" class="form-control" placeholder="Email" value="<?php echo "$c1";?>">
                    </div>
                    <div class="input-box">
                        <input type="number" name="telephone" class="form-control" placeholder="telephone" minlength="10" maxlength="10" value="<?php echo "$d1";?>">
                    </div>
                    <input type="submit" name="insert" value="submit" class="btn btn-warning btn-block">
                    <input type="submit" name="select" value="select" class="btn btn-warning btn-block">
                    <input type="submit" name="report" value="report" class="btn btn-warning btn-block">
                </form>
            </div>
        </div>
    </div>
</body>
</html>RecruiterID CompanyName email   telephone   User_id )