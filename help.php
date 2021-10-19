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

<?php include "menu.php"?>


		<!-- Page Header -->
		<div id="page-header">
			<!-- section background -->
			<br><br><br><br>
			<div class="section-bg" style="background-image: url(./img/ele1.jpg);"></div>
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



	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-12">
					<h3>What is in it for you?</h3><br>
						
					<div class="about-content" style="text-align: justify;">
						<h4>KViK provides not only skill to the young unemployed boys and girls, but also an opportunity to the financially successful and socially compassionate people to contribute to the welfare of the society. You can support KViK in achieving its vision in the following ways:</h4>
						<br>
						
						<p><li>Donate any amount as you deem fit. Your donation is eligible for 50% income tax exemption under Sec.80G of Income Tax Act. You can transfer money to KViK by NEFT (see ‘Support’ page for details), Or, send a cheque to Kaushalya Vikas Kendra, #7, Weavers colony, Bannerghatta Road, Bengaluru – 560083</li></p>
						<p><li>Join as a ‘volunteer trainer’ to impart soft skills like ‘Spoken English, Work ethics, Safety’, etc.</li></p>
						<p><li>Provide employment or apprenticeship to the motivated trainees coming out of KViK with a new skill. Their expectations are little, but their competency surpasses any other such training due to ‘learning by doing’ approach.</li></p>
						<p><li>Refer a poor school/college drop out to KViK. In a few months time the student would be employed or self-employed with a sustainable livelihood. You will see the fruits of your kind gesture very quickly.</li></p>
						<p><li>Donate equipment for training, such as, Computers, work benches, class room chairs, etc.</li></p>
						





					<br>

					</div>
				</div>
				<!-- /about content -->
			

				<!-- /about content -->
			</div>
		</div>
	</div>


<?php include "footer2.php"?>


	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
