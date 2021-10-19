


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

</head>

<body>
	<!-- HEADER -->
	<header>
	
<?php include "menu.php"?>

		<!-- Page Header -->
		<div id="page-header">
			<!-- section background -->
		
			<div class="section-bg" style="background-image: url(./img/ethinic.jpg);"></div>
			<!-- /section background -->

			<!-- page header content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-content">
							<h1>Events</h1>
							<ul class="breadcrumb">
								<li><a href="home.php">Home</a></li>
								<li class="active">Events</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header content -->
		</div>
		<!-- /Page Header -->


	</header>
	

				<?php
					if(isset($_POST["submit"]))
	{

			include"database.php";
			$s="select * from events where event_date BETWEEN '{$_POST["start_date"]}' AND '{$_POST["end_date"]}' order by id desc";
			$res=$db->query($s);
			if($res->num_rows>0)
			{
				echo "<br><br><h4 style='margin-left: 110px;'>The following events are found between {$_POST["start_date"]} and {$_POST["end_date"]} </h4>";

					echo "
				<!-- SECTION -->
				<div class='section'>
					<!-- container -->
					<div class='container'>
						<!-- row -->
						<div class='row'>
							<!-- MAIN -->
							<main id='main' class='col-md-12'>
								<div class='row'>";
								while($r=$res->fetch_assoc())
								{
									
									echo "	

									<!-- article -->
									<div class='col-md-6'>
										<div class='article'>
											<div class='article-img'>
												<a href='single_u_event.php?id={$r["id"]}'>
													";?><img src="<?php echo $r["slide"] ?>" alt="">
													<?php
													echo 
													"
												</a>
											</div>
											<div class='article-content'>
												<h3 class='article-title'><a href='single_u_event.php?id={$r["id"]}'>{$r["event_name"]}</a></h3>
												<ul class='article-meta'>
													<li> {$r["event_date"]}</li>
													<li>By {$r["event_by"]}</li>
												 
												</ul>
												<p>{$r["description"]}</p>

													<a href='single_u_event.php?id={$r["id"]}' class='primary-button causes-donate'>More info</a>
											</div>
										</div>
									</div>
									<!-- /article -->";
								}

							
							echo "	</div>
							<!-- /row -->
						</div>
						<!-- /container -->
					</div>
					<!-- /SECTION -->

			";
			echo "<h4 style='margin-left: 110px;'>End of events which were found between {$_POST["start_date"]} and {$_POST["end_date"]} </h4>";

				
			}
				else
				{
					echo "<p style='margin-left:110px;'>Sorry. Blog not Found</p>";

					
				}
}




	
			$s="select * from events order by id desc limit 3";
			$res=$db->query($s);
			if($res->num_rows>0)
			{
				echo "
	
	<!-- CAUSESS -->
	<div id='causes' class='section'>
		<!-- container -->
		<div class='container'>
			<!-- row -->
			<div class='row'>

				<!-- section title -->
				<div class='col-md-8 col-md-offset-2'>
					<div class='section-title text-center'>
						<h2 class='title'>Upcoming events</h2>
						<p class='sub-title'>KViK is going to conduct the events. They are below.</p>
					</div>
				</div>
				<!-- section title -->


			";?>
							<!-- article reply form -->
							<div class="article-reply" style='margin-left: 20px;'>
								
					
								<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
											<input type="date" class="input" name="start_date" placeholder="Starting Date">

											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
										<input type="date" class="input" name="end_date" placeholder="Ending Date">
											
										</div></div>
										<div class="col-md-2">
											<div class="form-group">
										
													<button class="primary-button" name="submit2">Submit</button>
									
											</div>
										</div>
											<form id="frm" autocomplete="off">
												<div class="col-md-2">
											<div class="form-group">					
							<input type="text" id="txt2" class="input" pattern="[a-zA-Z]{3,}" title="Enter only Alphabets" placeholder="Search by Event Name">
						</div></div>
						</form>
						
						<div id="box2"></div>
						
									</div>

									</form>

							</div>

			<?php 
				
				while($r=$res->fetch_assoc())
				{

				echo "
				<!-- causes -->
				<div class='col-md-4'>
					<div class='causes'>
						<div class='causes-img'>
							<a href='single_u_event.php?id={$r["id"]}'>
							<img src='{$r["slide"]}' height='230px'>
							</a>
						</div>
						<div class=causes-content>
							<h3><a href='single_u_event.php?id={$r["id"]}'>{$r["event_name"]}</a></h3>
							<p>{$r["event_date"]}&nbsp;&nbsp;&nbsp;&nbsp;By&nbsp;&nbsp;{$r["event_by"]}</p>

							<p>{$r["description"]}</p>
								<div class='article-tags-share'>
							
							<ul class='share'>
									<li>SHARE:</li>
									<li><a href='#'><i class='fa fa-twitter'></i></a></li>
									<li><a href='#'><i class='fa fa-facebook'></i></a></li>
									<li><a href='#'><i class='fa fa-google-plus'></i></a></li>
									<li><a href='#'><i class='fa fa-pinterest'></i></a></li>
									<li><a href='#'><i class='fa fa-instagram'></i></a></li>
								</ul>
								</div>
							<a href='single_u_event.php?id={$r["id"]}' class='primary-button causes-donate'>More info</a>
						</div>
					</div>
				</div>
				<!-- /causes -->
				";
				}

		

echo "
			</div>
			<!-- /row -->

		</div>
		<!-- /container -->

	</div>
	<!-- /CAUSESS -->
	";
}
?>

			

			


				<?php
									if(isset($_POST["submit2"]))
	{

			include"database.php";
			$s="select * from c_events where event_date BETWEEN '{$_POST["start_date"]}' AND '{$_POST["end_date"]}' order by id desc";
			$res=$db->query($s);
			if($res->num_rows>0)
			{
				echo "<h4 style='margin-left: 110px;'>The following events are found between {$_POST["start_date"]} and {$_POST["end_date"]}</h4>";

					echo "
				<!-- SECTION -->
				<div class='section'>
					<!-- container -->
					<div class='container'>
						<!-- row -->
						<div class='row'>
							<!-- MAIN -->
							<main id='main' class='col-md-10'>
								<div class='row'>";
								while($r=$res->fetch_assoc())
								{
									
									echo "	

									<!-- article -->
									<div class='col-md-6'>
										<div class='article'>
											<div class='article-img'>
												<a href='single_u_event.php?id={$r["id"]}'>
													";?><img src="<?php echo $r["slide"] ?>" alt="">
													<?php
													echo 
													"
												</a>
											</div>
											<div class='article-content'>
												<h3 class='article-title'><a href='single_u_event.php?id={$r["id"]}'>{$r["event_name"]}</a></h3>
												<ul class='article-meta'>
													<li> {$r["event_date"]}</li>
													<li>By {$r["event_by"]}</li>
												 
												</ul>
												<p>{$r["description"]}</p>

													<a href='single_u_event.php?id={$r["id"]}' class='primary-button causes-donate'>More info</a>
											</div>
										</div>
									</div>
									<!-- /article -->";
								}

							
							echo "	</div>
							<!-- /row -->
						</div>
						<!-- /container -->
					</div>
					<!-- /SECTION -->

			";
			echo "<p style='margin-left: 110px;'>End of events which were found between {$_POST["start_date"]} and {$_POST["end_date"]}";

				
			}
				else
				{
					echo "<p style='margin-left:110px;'>Sorry. Blog not Found</p>";

					
				}
}

			include"database.php";
	
			$s="select * from c_events order by id desc limit 3";
			$res=$db->query($s);
			if($res->num_rows>0)
			{
				echo "
	
	<!-- CAUSESS -->
	<div id='causes' class='section'>
		<!-- container -->
		<div class='container'>
			<!-- row -->
			<div class='row'>

				<!-- section title -->
				<div class='col-md-8 col-md-offset-2'>
					<div class='section-title text-center'>
						<h2 class='title'>Current events</h2>
						<p class='sub-title'>KViK has different ongoing events.</p>
					</div>
				</div>
				<!-- section title -->
				";
				?>

							<!-- article reply form -->
							<div class="article-reply" style='margin-left: 20px;'>
								<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
											<input type="date" class="input" name="start_date" placeholder="Starting Date">

											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
										<input type="date" class="input" name="end_date" placeholder="Ending Date">
											
										</div></div>
										<div class="col-md-2">
											<div class="form-group">
										
													<button class="primary-button" name="submit2">Submit</button>
									
											</div>
										</div>
											<form id="frm" autocomplete="off">
												<div class="col-md-2">
											<div class="form-group">					
							<input type="text" id="txt" class="input" pattern="[a-zA-Z]{3,}" title="Enter only Alphabets" placeholder="Search by Event Name">
						</div></div>
						</form>
						
						<div id="box"></div>
						
									</div>

									</form>

							</div>

<?php 

				
				while($r=$res->fetch_assoc())
				{

				echo "
				<!-- causes -->
				<div class='col-md-4'>
					<div class='causes'>
						<div class='causes-img'>
							<a href='single_c_event.php?id={$r["id"]}'>
							<img src='{$r["slide"]}' height='230px'>
							</a>
						</div>
						<div class=causes-content>
							<h3><a href='single_c_event.php?id={$r["id"]}'>{$r["event_name"]}</a></h3>
							<p>{$r["event_date"]}&nbsp;&nbsp;&nbsp;&nbsp;By&nbsp;&nbsp;{$r["event_by"]}</p>
							
							<p>{$r["description"]}</p>
							<div class='article-tags-share'>
							
							<ul class='share'>
									<li>SHARE:</li>
									<li><a href='#'><i class='fa fa-twitter'></i></a></li>
									<li><a href='#'><i class='fa fa-facebook'></i></a></li>
									<li><a href='#'><i class='fa fa-google-plus'></i></a></li>
									<li><a href='#'><i class='fa fa-pinterest'></i></a></li>
									<li><a href='#'><i class='fa fa-instagram'></i></a></li>
								</ul>
								</div>
							<a href='single_u_event.php?id={$r["id"]}' class='primary-button causes-donate'>More info</a>
						</div>
					</div>
				</div>
				<!-- /causes -->
				";
				}

		

echo "
			</div>
			<!-- /row -->

		</div>
		<!-- /container -->

	</div>
	<!-- /CAUSESS -->
	";
}
?>

	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-9">
						<h3>Events</h3>
						<br>
						<h4>Girls from KViK get placed!</h4>
						
						
					<div class="about-content">
						<p>For the first time, two girls, Asha and Archana (sisters), passed out from KViK in Electronics, were placed in Computer Gallerie and Jeeves Services, respectively. From what we her from their employers, both are adept in trouble shooting faults in computers and other electronic gadgets. Soft skills learnt in KViK, including Spoken English, is helping them in customer interaction.Both were active in and outside the training centre, as seen in the following pictures. KViK wishes them best of success!</p>
						<br>
					</div>
				</div>
				<!-- /about content -->
					<!-- about video -->
				<div class="col-md-offset-0 col-md-3">
					<a href="gallery.php" class="about-video">
							<img src="./img/ele1.jpg" alt="">
					</a>
					<br>
					<br>
				</div>
				
				<div class="col-md-offset-0 col-md-3">
					<a href="gallery.php" class="about-video">
							<img src="./img/ele2.jpg" alt="">
					</a>
										<br>
					<br>
				</div>
				<div class="col-md-offset-0 col-md-3">
					<a href="gallery.php" class="about-video">
							<img src="./img/ele3.jpg" alt="">
					</a>
										<br>
					<br>
				</div>
				<div class="col-md-offset-0 col-md-3">
					<a href="gallery.php" class="about-video">
							<img src="./img/ele4.jpg" alt="">
					</a>
										<br>
					<br>
				</div>
				<div class="col-md-offset-0 col-md-3">
					<a href="gallery.php" class="about-video">
							<img src="./img/ele5.jpg" alt="">
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

	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-9">
						<h3>Ethnic Day Celebration</h3>
							
					<div class="about-content">
						<p>The staff and students of KViK celebrated the ‘unity in diversity’ in the Indian society on 3rd May. The day was marked by fun and camaraderie!</p>
						<br>
					</div>
				</div>
				<!-- /about content -->
					<!-- about video -->
				<div class="col-md-offset-0 col-md-3">
					<a href="gallery.php" class="about-video">
							<img src="./img/ethnic.jpg" alt="">
					</a>
					<br>
					<br>
				</div>
				
				<div class="col-md-offset-0 col-md-3">
					<a href="gallery.php" class="about-video">
							<img src="./img/ethnic1.jpg" alt="">
					</a>
										<br>
					<br>
				</div>
				<div class="col-md-offset-0 col-md-3">
					<a href="gallery.php" class="about-video">
							<img src="./img/ethnic2.jpg" alt="">
					</a>
										<br>
					<br>
				</div>
				<div class="col-md-offset-0 col-md-3">
					<a href="gallery.php" class="about-video">
							<img src="./img/ethnic3.jpg" alt="">
					</a>
										<br>
					<br>
				</div>
				<div class="col-md-offset-0 col-md-3">
					<a href="gallery.php" class="about-video">
							<img src="./img/ethnic4.jpg" alt="">
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
	

	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-9">
						<h3>An important visit </h3>
							
					<div class="about-content">
						<p>Mrs. and Mr. Raina from Pune, friends of Hegdes, visited KViK and appreciated the social objective of the institute. Mr. Raina is credited with building a 100% export unit in Pune with high profitability, fast growth and, above all, benchmark HR practices. He is now a social entrepreneur and actively involved in Training, Community farming and Environment preservation. Here they are seen with Mr. Subbu Hegde, MD.</p>
						<br>
					</div>
				</div>
				<!-- /about content -->
					<!-- about video -->
				<div class="col-md-offset-0 col-md-3">
					<a href="gallery.php" class="about-video">
							<img src="./img/subbu.jpg" alt="">
					</a>
					<br>
					<br>
				</div>
			
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->
	
<?php include "footer2.php"?>


	<!-- jQuery Plugins -->
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>

<script>
				$(document).ready(function(){
					$("#txt").keyup(function(){
						var txt=$("#txt").val();
						if(txt!="")
						{
							$.post("search_u_events_design.php",{s:txt},function(data){
								$("#box").html(data);
							});
						}
						
					});
					
					
					
				});
			</script>

<script>
				$(document).ready(function(){
					$("#txt2").keyup(function(){
						var txt=$("#txt2").val();
						if(txt!="")
						{
							$.post("search_c_events_design.php",{s:txt},function(data){
								$("#box2").html(data);
							});
						}
						
					});
					
					
					
				});
			</script>