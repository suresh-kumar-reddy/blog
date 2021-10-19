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
		
			<div class="section-bg" style="background-image: url(./img/cm.jpg);"></div>
			<!-- /section background -->

			<!-- page header content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-content">
						<br><br><br>
							<h1>Training Technique</h1>
							<ul class="breadcrumb">
								<li><a href="home.php">Home</a></li>
								<li class="active">Training Technique</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header content -->
		</div>
		<!-- /Page Header -->


	</header>
	
	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-8">
						<h3>Training Methodology</h3>
						<h4>Cost-effective and High Quality Training</h4>
						
					<div class="about-content" style="text-align: justify;">
						<p><b>High quality training at reasonable cost is the corner stone on which KViK has built its credibility and reputation.</b></p>
<p>
						
							<li>The KViK logo indicates the focus on ‘hand skills’ and what a highly skilled person can produce.<br><br></li>
							<li> A highly skilled person also is like a diamond and valued.<br> <br></li>
							<li>The curriculum of KViK is based on German “Dual training” model which emphasizes class room teaching and on-the-job training in equal measure.<br><br></li><li> Emphasis is on technical skills as well as soft skills like work culture, adherence to standards, safety and discipline. <br><br></li><li>The courses offered by KViK are affordable to students from economically weaker sections.<br><br></li><li> The cost of the high quality training is met mainly by fees, placement fee and donations.<br><br> <br></li><li>The revenue model is designed to sustain and expand the training facilities in a steady manner.<br><br></li><li>

The DGET has recognised KViK as a Vocational Training Provider (VTP) after a rigorous process of scrutiny and validation of its infrastructure, faculty and other resources.<br><br></li><li> Under the Skill Development Incentive scheme, test of students and issuing of certificates after completion of curriculum and training is done by assessing bodies appointed by DGETs.<br><br></li><li> Tailoring course is based on agreement with USHA International with special curriculum, duration and fee structure.
<br><br></li><li>
Kaushalya Vikas Kendra, as the name suggests believes that every person has the basic talent. It provides opportunity for the talent to develop in to an employable skill.
<br><br></li><li>
The KViK courses run on part time basis to allow poor students to earn some money by odd jobs. The class duration is 2 to 3 hours per day. <br><br></li><li>Training in some skills is done in multiple batches during the day in order to utilise resources optimally. The duration of the courses vary from 3 to 6 months.
</p>
						<br>
					</div>
				</div>
				<!-- /about content -->

				<!-- about video -->
				<div class="col-md-offset-1 col-md-3">
					<a href="gallery.php" class="about-video">
							<img src="./img/ooo.jpg" alt="">
					</a>
					<br>
					<br>
				</div>
				
				<!-- /about video -->

				<!-- about video -->
				<div class="col-md-offset-1 col-md-3">
					<a href="gallery.php" class="about-video">
							<img src="./img/oo.jpg" alt="">
					</a>
					<br>
					<br>
				</div>
				<!-- /about video -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->



	
<?php include "footer2.php"?>



	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
