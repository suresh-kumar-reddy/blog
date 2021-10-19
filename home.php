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
	<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="icon"  href="img/logo.png">
	
	<title>Kaushalya Vikas Kendra</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link type="text/css" rel="stylesheet" href="css/style.css" />

	
</head>

<body>
	<header id="home">
<?php include "menu.php"?>
	







				
		
		<?php
			include"database.php";
	
			$s="select * from slides where AID='4'";
			$res=$db->query($s);
			
			if($res->num_rows>0)
			{
				echo "<div id='home-owl' class='owl-carousel owl-theme'>";
						
				while($r=$res->fetch_assoc())
				{
					if($r["host"]=="yes")
					{
					echo "
								<div class='home-item'>
								<div class='section-bg' style='background-image: url({$r["slide"]});'>

								</div>			
									<div class='home'>
										<div class='container'>
											<div class='row'>
												<div class='col-md-8'>
													<div class='home-content'>
														<h1>{$r["heading"]} </h1>
															<p class='lead'>{$r["description"]}</p>
																<a href='{$r["page_link"]}' class='primary-button'>Click for More</a>
													</div>
												</div>
											</div>
										</div>
									</div>
							</div>
						
						
					";
					}

					}
											echo "
				
							<div class='home-item'>	
							<div class='section-bg' style='background-image: url(./img/k.jpg);'>

							</div>
								<div class='home'>
									<div class='container'>
										<div class='row'>
											<div class='col-md-8'>
												<div class='home-content'>
													<h1>About</h1>
														<p class='lead'>KViK stands for skill development centre : a skill
															for a lifelong livelihood and success!!</p>
															<a href='about.php' class='primary-button'>For More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
						</div>

						";
			
				echo "</div>";
			}
			?>


	</header>
	



	<!-- ABOUT -->
	<div id="about" class="section" style="text-align: justify;
 	 								text-justify: inter-word;">
		<!-- container -->
		<div class="container" >
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-12">
						<h3>About</h3>
						
					<div class="about-content">
						<p><?php echo $row1["about"] ?> <a style="color:green;" href="<?php echo $row1["about_link"] ?>"> Click for more</a></a></p>
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




	<div id="about" class="section">
		<div class="container">
			<div class="row">
				

				<div class="col-md-5">
					<h2 class="title"><?php echo $row1["e_name"] ?></h2><justify>
					<br>
						<h4 class="sub-title"><?php echo $row1["e_heading"] ?></h4></justify>
							<div class="about-content">
								<p style="text-align: justify;
 	 								text-justify: inter-word;"><?php echo $row1["e_description"] ?></p>
								<a href="<?php echo $row1["latest_event_link"] ?>" class="primary-button" > read more</a><br><br>
								
							</div>	
				</div>
				
				<!-- about video -->
				<div class="col-md-offset-0 col-md-7">
					<div class='embed-container'><iframe src='<?php echo $row1["youtube_link"] ?>' frameborder='0' allowfullscreen></iframe></div>
					<br>
				</div>
				<!-- /about video -->

		

				</div>




			</div>
		
		</div>
	



	<!-- TESTIMONIAL -->
	<div id="testimonial" class="section">
		<!-- background section -->
				<!-- background section -->
		<div class="section-bg" style="background-image: url(./img/event-2.jpg);" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->


		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				

				<!-- Testimonial owl -->
				<div class="col-md-12">
					<div id="testimonial-owl" class="owl-carousel owl-theme">
				
			<?php
				include"database.php";
	
				$s="select * from test_monial where AID='4'";
				$res=$db->query($s);
				if($res->num_rows>0)
				{
					while($r=$res->fetch_assoc())
					{

						echo "
						<!-- testimonial -->
						<div class='testimonial'>
							<div class='testimonial-meta'>
								<div class='testimonial-img'>
								<img src='{$r["slide"]}'>
								</div>
								<h3>{$r["name"]}</h3>
								<h5 style='color:white;'>{$r["designation"]}</h5>
							</div>
							<div class='testimonial-quote'>
								<blockquote>
									<p>{$r["description"]}</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->
						";
					}
				}
				else
				{
						echo "
						<!-- testimonial -->
						<div class='testimonial'>
							<div class='testimonial-meta'>
								<div class='testimonial-img'>
								<img src='./img/shai.png'>
								</div>
								<h3>Shailendra</h3>
								<h5>Now a successful entrepreneur</h5>
							</div>
							<div class='testimonial-quote'>
								<blockquote>
									<p>“I learnt in KViK not only
basic skills in Electronics but
also soft skills”</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class='testimonial'>
							<div class='testimonial-meta'>
								<div class='testimonial-img'>
								<img src='./img/divya.png'>
								</div>
								<h3>Divya</h3>
								<h5>Proud owner of a Beauty Parlour</h5>
							</div>
							<div class='testimonial-quote'>
								<blockquote>
									<p>“I started my own ‘beauty parlour’ after training
in KViK and I have realised my dream in a very
short time. I am ever grateful to KViK for
changing my life and bring happiness.”</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->
						";
				}
				?>

					</div>
				</div>
				<!-- /Testimonial owl -->
			</div>
			<!-- /Row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /TESTIMONIAL -->


	<!-- NUMBERS -->
	<div id="numbers" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="glyphicon glyphicon-education"></i>
						<h3><?php echo $row1["trained"] ?></h3>
						<span><?php echo $row1["trained_name"] ?></span>
					</div>
				</div>


				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="glyphicon glyphicon-user"></i>
						<h3><?php echo $row1["volunteers"] ?></h3>
						<span><?php echo $row1["volunteers_name"] ?></span>
					</div>
				</div>
				<!-- /number -->
				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="glyphicon glyphicon-wrench"></i>
						<h3><?php echo $row1["donated"] ?></h3>
						<span><?php echo $row1["donated_name"] ?></span>
					</div>
				</div>
				<!-- /number -->

				<!-- /number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="glyphicon glyphicon-calendar"></i>
						<h3><?php echo $row1["trainers"] ?></h3>
						<span><?php echo $row1["trainers_name"] ?></span>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NUMBERS -->


	<!-- CTA -->
	<div id="cta" class="section">
		<!-- background section -->
		<div class="section-bg" style="background-image: url(./img/event-2.jpg);" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- cta content -->
				<div class="col-md-offset-2 col-md-8">
					<div class="cta-content text-center">
						<h1><?php echo $row1["volunteer_heading"] ?></h1>
						<p class="lead"><?php echo $row1["volunteer_description"] ?></p>
						<a href="<?php echo $row1["volunteer_link"] ?>" class="primary-button" target="_blank">Join Us Now!</a>
						
						
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
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
