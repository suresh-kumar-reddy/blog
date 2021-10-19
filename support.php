<?php
	include"database.php";
		$sql1="SELECT * FROM home_others WHERE id='1'";
		$res1=$db->query($sql1);

		if($res1->num_rows>0)
		{
			$row1=$res1->fetch_assoc();
		}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="icon" href="img/logo.png">
	
	<title>Kaushalya Vikas Kendra</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link type="text/css" rel="stylesheet" href="css/style.css" />

	
</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- NAVGATION -->
	
<?php include "menu.php"?>


		<!-- Page Header -->
		<div id="page-header">
			<!-- section background -->
			
			<div class="section-bg" style="background-image: url(./img/k.jpg);"></div>
			<!-- /section background -->

			<!-- page header content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-content">
							<h1>Support</h1>
							<ul class="breadcrumb">
								<li><a href="home.php">Home</a></li>
								<li class="active">Support</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header content -->
		</div>
		<!-- /Page Header -->
	</header>
	<!-- /HEADER -->



<?php 
$sql="SELECT * FROM support";
		$res=$db->query($sql);

		if($res->num_rows>0)
		{
			while($row=$res->fetch_assoc())
			{

echo "

	<!-- ABOUT -->
	<div id='about' class='section' style='text-align: justify;
 	 								text-justify: inter-word;'>
		<!-- container -->
		<div class='container'>
			<!-- row -->
			<div class='row'>
				<!-- about content -->
				<div class='col-md-12'>
								
					<div class='about-content'>
					
						{$row["content"]}
						<br>
					</div>
				</div>
				<!-- /about content -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->

	";
}}
		?>




	<div id="cta" class="section">
		<!-- background section -->
		<div class="section-bg" style="background-image: url(./img/k.jpg);" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- cta content -->
				<div class="col-md-offset-2 col-md-8">
					<div class="cta-content text-center">
						<h1>Become A Volunteer</h1>
						<p class="lead" style="text-align: justify;">KViK incurs sizable infrastructure and operational expenses to maintain its high quality, employment oriented training facility. It has engaged expert trainers and staff and rented buildings for the training centre and the dormitory at the market rates. All these are funded by private donations.</p>
						<a href="volunteer_signup.php" class="primary-button">Join Us Now!</a>
					</div>
				</div>
				<!-- /cta content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CTA -->


<?php include "footer2.php"?>


	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
