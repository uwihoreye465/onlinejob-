

<?php
session_start();
if (strlen($_SESSION['userid']==0)) {
	# code...
	header("location:adminlogin.php");
}
else{
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.css">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<style type="text/css">
.body{
	font-family: arial;
	box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.sidebar{
	padding-top: 30%;
	margin: 0;
	padding: 0;
	padding-left:0.3%;
	width:220px;
	height:99%;
	position:fixed;
	background-color:white;
	box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
.sidebar a{
	display: block;
	text-decoration: none;
	font-size: 12pt;
	padding: 20px 30px;
	background-color:white;
}
.sidebar a:hover{
	color:blue;
	width: 100%;
	background-color:lightblue;
}
@media only screen and(max-width: 600px)
	{
		.content{
			width:98%;
			margin:1%;
		}
		
	}
	.content{
		width: 90%;
	}
	.main{
		width: 100%;
		height: 100%;
		display: flex;
	}
	#block1{
		padding-left: 3%;
		padding-top: 20px;
		width: 60%;
		height: 200px;
		border-radius: 12px;
		margin: 27%;
		font-size: 12pt;
		margin-top: 10px;
		box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	  #block2{
		width: 60%;
		height: 200px;
		font-size: 12pt;
		padding-top: 20px;
		border-radius: 12px;
		margin: 3% 1% 3% 0%;
		box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
		#block3{
		box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		margin: 3% 1% 3% 0%;
		width: 60%;
		font-size:12pt;
		height:200px;
		padding-top:20px;
		border-radius:12px;
		padding-left:10%;
		
	}
	#block4{
		padding-left: 3%;
		padding-top: 20px;
		width: 60%;
		height: 200px;
		border-radius: 12px;
		margin: 27%;
		font-size: 12pt;
		margin-top: 10px;
		box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	  #block5{
		width: 50%;
		height: 200px;
		font-size: 12pt;
		padding-top: 20px;
		border-radius: 12px;
		margin: 3% 1% 3% 0%;
		box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		padding-left: 5%;
	}
		#block6{
		box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		margin: 3% 1% 3% 0%;
		width: 60%;
		font-size:12pt;
		height:200px;
		padding-top:20px;
		border-radius:12px;
		float: right;

	}
	
.img{
	width: 6%;
	border-radius: 12px;
	box-shadow: 1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	position: fixed;
  left: 0px;
  top: 0px;
  z-index:-1px;
}
#icon{
	font-size: 10pt;
	float: left;
	margin-top: 15%;
}
#dec{
	text-decoration: none;
}
fieldset{
	height: 90%;
	background-color: lightblue;
	box-shadow: 1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.container{
	column-gap: 20px;
	padding-left: 2%;

}
.container1{
	column-gap: 20px;
	padding-left: 2%;

}

</style>
<body>
<fieldset><div class="main">
<div class="sidebar"><br><br><br><br>
	<a href="jobview.php"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;Job view</a>
    <a href="Recruiterviwers.php"><i class="fa fa-user-tie"></i>&nbsp;&nbsp;Recruiter view</a>
    <a href="notification.php"><i class="fa fa-bell"></i>&nbsp;&nbsp;Notification views</a>
    <a href="user.php"><i class="fa fa-users"></i>&nbsp;&nbsp;User view</a>
    <a href="Applicationviwer.php"><i class="fa fa-file-alt"></i>&nbsp;&nbsp;Application view</a>
    <a href="adminlogin.php"><i class="fa fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</a>
</div>
</div></div>
<div class="container">
<center><h1 style="color:white;position: relative; font-family: Times;font-weight: bold">WELLCAME TO ADMIN DASHBOARD</h1></center>
	<div class="row">
		<div class="col-sm-4">
			<h1 id="block1" class="alert alert-dark">Total number of job<br><br>
			<?php
$con=mysqli_connect("localhost","root","","jobonline");
$sql=mysqli_query($con,"SELECT count(*) as JobID from job");
if ($sql==true) {
	while ($row=mysqli_fetch_array($sql)) {
		   $JobID=$row['JobID'];
            echo "$JobID";
	}
}
         ?></h1>
</h1>
		</div> 
		<div class="col-sm-4">
			<h1 id="block2" class="alert alert-warning"><p style="margin-bottom:20%;">	Total number of users<br><br>
				<?php
$con=mysqli_connect("localhost","root","","jobonline");
$sql=mysqli_query($con,"SELECT COUNT(*) AS user_id FROM users");
if ($sql==true) {
while ($fetch=mysqli_fetch_array($sql)) {
	$user_id=$fetch['user_id'];
	echo "$user_id";
}
}
	?></h1>
		</div>
		<div class="col-sm-4">
			<h1 id="block3" class="alert alert-info">Total number of recuiter<br><br>	
				<?php
$con=mysqli_connect("localhost","root","","jobonline");
$sql=mysqli_query($con,"SELECT COUNT(*) AS RecruiterID FROM recruiter");
if ($sql==true) {
       while ($fet=mysqli_fetch_array($sql)) {
       	$a=$fet['RecruiterID'];
       	echo "$a";
           
    }
}
			?></h1>
			
			</h1>	
		</div>

		<div class="col-sm-4">
			<h1 id="block4" class="alert alert-warning">Total number of applied<br><br>	
			<?php
$con=mysqli_connect("localhost","root","","jobonline");
$sql=mysqli_query($con,"SELECT COUNT(*) AS id FROM jobseekerw");
if ($sql==true) {
       while ($fet=mysqli_fetch_array($sql)) {
       	$a=$fet['id'];
       	echo "$a";
           
    }
}
			?>
				</h1>

			</h1>	
		</div>

        <div class="col-sm-5">
			<h1 id="block5" class="alert alert-success">Total number of notification<br><br>	
			<?php
$con=mysqli_connect("localhost","root","","jobonline");
$sql=mysqli_query($con,"SELECT COUNT(*) AS NotificationID FROM notification");
if ($sql==true) {
       while ($fet=mysqli_fetch_array($sql)) {
       	$a=$fet['NotificationID'];
       	echo "$a";
           
    }
}
			?>
				</h1>

			</h1>	
		</div>
	
	<fieldset style="background-color: lightpink;width: 12%;height: 45%;box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:12px ">
	Date and Time<br><br>
			<?php
             $tz=new DateTimeZone('Africa/kigali');
             $td=new DateTime('now',$tz);
             $currenttime=$td->format("H:i d/m/y");
             echo "$currenttime";
			?>	<br><br><br><br><br><br><br>
		
</div>
<img src="logo.png" class="img"><div class="">
<footer>
<center><h4 style="color: white;">&copy 2023-2024 ONLINE JOB APPLICATIONS</h4></center>
</footer></div>
</fieldset>
</body>
</html>

<?php
}
?>