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
#................report..........................
if (isset($_POST['report'])) {
        $report=mysqli_query($con,"SELECT * FROM USERS");
     echo "<table border='2'>
        <tr>
     <th>user_id</th>
     <th>id_card</th>
     <th>emails</th>
     <th>password</th>
       </tr>";
       while ($fet=mysqli_fetch_array($report)) {
           echo "<tr>
        <td>".$fet['user_id']."</td>
         <td>".$fet['id_card']."</td>
          <td>".$fet['emails']."</td>
           <td>".$fet['password']."</td>
           </tr>";
       }
echo "</table>";
    }
    #........................delete..........................
    if (isset($_POST['delete'])) {
    $a=$_POST['user_id'];
    $b=$_POST['id_card'];
    $c=$_POST['emails'];
    $d=$_POST['password'];
        $delete=mysqli_query($con,"DELETE FROM USERS WHERE user_id='$a'");
    if ($delete==true) {
         echo "user delete";
     } else{
        echo "user not delete";
            }
     }
     #..................update.....................
    if (isset($_POST['update'])) {
    $a=$_POST['user_id'];
    $b=$_POST['id_card'];
    $c=$_POST['emails'];
    $d=$_POST['password'];
        $update=mysqli_query($con,"UPDATE USERS SET id_card='$b',emails='$c',password='$d' WHERE user_id='$a'");
    if ($update==true) {
         echo "user updated";
     } else{
        echo "user not updated";
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
            margin-top: -25px;
            margin-left:1.5%;
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
            margin: 25% 90% 0%;
            color: black;
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
             <button class="btn btn-dark"> <a href="dash.php">Back</a></button>   <form action="" method="post" class="alert alert-primary p-4">
                    <legend class="mb-4">Create Account</legend>
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
                 <input type="submit" name="report" value="report" class="btn btn-success btn-block">
                 <input type="submit" name="delete" value="Delete" class="btn btn-danger btn-block">
                 <input type="submit" name="update" value="update" class="btn btn-warning btn-block">
                </form>
            </div>
        </div>
    </div>
</body>
</html>