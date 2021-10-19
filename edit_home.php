<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>
<!DOCTYPE html>
<html>
	<head>
		<style >
			*{
	padding:0px;
	margin:0px;
}

html{
	background:#dddddd;
	
}
.footer{
	background:white;
	height:60px;
	width:100%;	
	float:left;
}
.footer{
	text-align:center;
	color:white;
	line-height:50px;
	
}


.back{
	background:white;
	height:100%;
	width: 100%;
	margin:0 auto;
	margin-top:5px;
	margin-bottom:5px;
	font-family:Century;
	
}


a{
	text-decoration:none;
}


.navbar{
	background:#663b95;
	height:60px;
	width:100%;	
}

.list{
	list-style:none;
	text-align:right;
	
}
.list li{
	display:inline;
	
}

.list li a{
	text-decoration:none;
	color:white;
	line-height:50px;
	padding:20px;
	
}

h1,h2,h3,h4,h5,h6,label{
	font-family:roboto;
	color:#663b95;
}

.heading{
	text-align:center;
	margin-top:40px;
}

.btn{
	border-radius:5px;
	padding:10px;
	background:white;
	color:black;
	margin-top:40px;	
}


.btnr{
	border-radius:5px;
	padding:5px;
	background:#ff0000;
	color:white;
	
}


.btnb{
	border-radius:5px;
	padding:5px;
	background:#43a7bc;
	color:white;

}




.log{
	height:auto;
	width:25%;
	margin:0 auto;
	margin-top:20px;
	padding:30px;
	margin-bottom:40px;
	
	 -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  -moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.cont{
	height:auto;
	width:50%;
	margin:0 auto;
	margin-top:20px;
	padding:30px;
	margin-bottom:40px;
	text-align:center;
	line-height:40px;
	 -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  -moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.sha{
	-webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  -moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.input2{
	width:80%;
	height:40px;
	margin-top:20px;
	
}



label{
	font-weight:bold;
}

.success{
	background:green;
	color:white;
	line-height:30px;
	border-radius:5px;
	height:30px;
	
	text-align:center;
	margin-bottom:10px;
	
}

.error{
	background:#ff1515;
	color:white;
	line-height:30px;
	border-radius:5px;
	height:30px;
	
	text-align:center;
	margin-bottom:10px;
}





.content1{
	margin-top:30px;
}

.s{
	list-style:none;
	
}



.li{
   
    position: relative;
    display: block;
    padding: 10px 15px;
    margin-bottom: -1px;
    background-color: #ffffff;
    border: 1px solid #ecf0f1; 
}

.imgs{
	height:200px;
	width:200px;
	float:left;
	margin:20px;
	
}

.text{
	text-align:center;		
	
}






#section{
	height:auto;
	width:1400px;
	margin-top: 100px;
	margin-left:90px;
	font-family:cambria;
	
}


.sidebar{
	width:400px;
	height:auto;
	margin-top:30px;
	margin-right:30px;
	float:left;
	background:white;
	
}

.content{
	margin-top:30px;
	height:auto;
	width:830px;
	float:left;	
	
}

.content1{
	margin-top:30px;
	height:auto;
	width:450px;
	float:left;	
	
}
.para{
	text-align:justify;
	padding:15px;
	line-height:34px;	
}

.tbox{
	float:left;
}

.tbox table{
	border-collapse:collapse;
	
}

tr,td,th{
	padding:20px;
}

.table{
	border-collapse:collapse;
}

.input3{
	width:90%;
	height:40px;
	margin-top:20px;
	
}

.input4{
	width:90%;
	height:40px;
	margin-top:20px;
	
}

.input5{
	width:25%;
	height:40px;
	margin-top:20px;
	margin-right:20px;
	
}
.lbox{
	
	
	width:45%;
margin-right:20px;
	float:left;
}

.rbox{
	

	width:45%;

	float:left;
}

table{
	border-collapse:collapse;
}

.lbox1{
	
	width:50%;
margin-right:20px;
	float:left;
}

.rbox1{
	width:45%;
	float:left;
}

.rbox1 table{
	width:100%;
}

textarea{
	resize:none;width:90%;margin-top:20px;

}

.Output table
{
	width:100%;
}

.ibox{
	width:65%;
	float:left;	
}

.tsbox{

	width:35%;
	float:left;	
	
}

		</style>
		
			<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="icon" href="img/logo.png">
	
	<title>Kaushalya Vikas Kendra</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" href="img/logo.png">
		</style>
		<title>Admin Homepage</title>
		<link rel="icon" href="img/logo.png">
	
	</head>
	<body>
		<!-- NAVGATION -->
		<nav id="main-navbar">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="admin_home.php"><img src="img/logo.png" alt="logo"></a>
						<a class="logo" href="admin_home.php">Kaushalya Vikas Kendra</a>
					</div>
					<!-- Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle-btn">
							<i class="fa fa-bars"></i>
						</button>
					<!-- Mobile toggle -->

					<!-- Mobile Search toggle -->
					<button class="search-toggle-btn">
							<i class="fa fa-search"></i>
						</button>
					<!-- Mobile Search toggle -->
				</div>

				<!-- Search -->
				<div class="navbar-search">
					<button class="search-btn"><i class="fa fa-search"></i></button>
					<div class="search-form">
						<form>
							<input class="input" type="text" name="search" placeholder="Search">
						</form>
					</div>
				</div>
				<!-- Search -->

				<!-- Nav menu -->
				<ul class="navbar-menu nav navbar-nav navbar-right">
					<li><a href="admin_home.php">Admin Home</a></li>
					<li><a href="logout.php">Settings</a></li>
					<li><a href="logout.php">Log Out</a></li>
					
				</ul>
				<!-- Nav menu -->
			</div>
		</nav>

			<div id="section" style="margin-left:10px;">
			
				<?php include"sidebar.php";?>
					<div class="content">
						<br><br><br><br><br><br><br>
						<a href="cms_slide.php">Edit Slides</a>
						<br>
						<br>
						<br>
						<a href="cms_home_others.php">Edit News and other Contents</a>
						<br>
						<br>
						<br>
						<a href="cms_testmonial.php">Test Monial</a>
						
				</div>
				</div>
				
				<?php include"footer.php";?>
	</body>
</html>