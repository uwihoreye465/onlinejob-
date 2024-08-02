<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.css">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<style type="text/css">
.header{
	background-image: url(milky.JPG);
	width: 100%;
	margin: 1px;
	position: fixed;
	text-decoration: none;
	text-align: center;
	color: white;
	border-radius: 2px;
	font-style: weight;
	opacity: 20px;
	flex-direction: column;
	box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.gap{
	color: white;
	text-align: center;
	column-gap: 8%;
	background-color: lightblue;
}
.container{
	background-color:white;
	padding-top: 5%;
	padding-bottom: 6%;

}
.link{
	color: white;
	text-decoration: none;
	font-family: times;
}
.imgi{
	width: 8%;
	border-radius: 5px; 
	padding-left: 40px;
	padding-bottom:10px; 
	float: left;
}
.img{
	width: 4%;
	border-radius: 5px; 
	padding-left: 30px;
	padding-bottom:10px; 
	text-align: center;
	color: white;
}

.footer{
	background-color: black;
	text-align: center;
	color: white;
	font-style: bold;
	position: flex;
	width:100%;
	height: 30%;
	box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
.st{
	text-align: center;
	font-style: bold;
	color:white;
	font-size: 15pt;
}
.sti{
	text-align: center;
	text-decoration: line;
	text-decoration-color: white;
	font-style: bold;
	color:white;
	font-size: 16pt
	font-size: 15pt;
}
.container{
	display: flex;
	column-gap: 5%;
	text-align: center;
justify-content: center;
	color: black;
	font-size: 14pt;
	padding-left: 0.1%;
	padding-right: 0.1%;
	padding-bottom: 38px;
	box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.oli{
text-align: left;
}

.lin{
	float: left;
	color: white;
	text-decoration: none;
	font-style: weight;
	font-size: 15pt;
	padding-left: 1%;
	text-align: left;
}
.tit{
background-color: black;
color: white;
font-size: 15pt;
border-radius: 3px;
}
.inp{
	border-color: white;
	text-align: center;
	width: 40%;
	height: 30%;
	border-radius: 10px;

}
.bac{
	width: 100%;
	height: 10%;
	border-color: blue;
	text-align: center;
	border-color: blue;
	box-shadow:1px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
.link{
	text-align: center;
}

.ti{
	color:blue;
}
@media only screen and(max-width: 600px)
	{
		.content{
			width:98%;
			margin:1%;
		}
		
	}
</style>
<body>
<div class="header">
<h1>ONLINE JOB APPLICATIONS</h1>
<img src="logo.png" class="imgi">
<i class="fa fa-home"><a href="Home.php" class="link">HOME</a></i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; 
<i class="fa fa-history"><a href="ABAUT.php" class="link">ABAUT US</a></i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; 
<i class="fa fa-phone"><a href="CONTACT.php" class="link">CONTACT US</a></i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; 
<i class="fa fa-gift"><a href="SERVICE.php" class="link">SERVICE</a></i><br><br><input type="text" name="seach" placeholder=" seach" class="inp"></div>
<br><br><br><br>
<div class="bac"><img src="hh.webp"> </div>
<div class="container">
<li class="fa fa-phone"><h1 class="ti">CONTACT US</h1></li>
	<p>
P.O Box: 49 niboyi<br>

Avenue des sports Kicukiro , KIGALI CITY.<br>
Web-site:www.ilpd.ac.rw<br>
TEL:0791990440<br>
    0786627074<br>
Emails : jobonline@gmail.com 
	</p>
</div>
<footer class="footer">
<div class="lin"><h4 class="sti">Link</h4>
<li><a href="Home.php" class="link">HOME</a></li>
<li><a href="ABAUT.php" class="link">ABAUT US</a></li>
<li><a href="CONTACTs.php" class="link">CONTACT US</a></li>
<li><a href="SERVICE.php" class="link">SERVICE</a></li>

</div>
<h4 class="sti">social media</h4>
<a href="https://www.facebook.com/"><img src="facebook.png" class="img"></a>Facebook<br>
<a href="https://www.instagram.com/accounts/login/"><img src="instagram.jpg" class="img"></a>Instagram<br>
<a href="https://twitter.com/i/flow/signup"><img src="twitter.png" class="img"></a>&nbsp;  &nbsp; &nbsp;Twitter<br>
<h4 class="st">&copy 2023-2024 ONLINE JOB APPLICATIONS</h4>
</footer>
</body>
</html>
