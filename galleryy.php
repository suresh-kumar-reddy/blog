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
	<link rel="dns-prefetch" href="https://code.jquery.com" />
      <link rel="stylesheet" type="text/css" href="popupcss/fs-gal.css" />
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
<style>
			.images{
				width:150px;
				height:150px;
				cursor:pointer;
				margin:10px;
			}
			.images:hover{
				-webkit-transform: scale(1.2);
				-moz-transform: scale(1.2);
				-o-transform: scale(1.2);
				transform: scale(1.2);
				transition: all 0.3s;
				-webkit-transition: all 0.3s;
			}
			html, body {
              margin: 0;
              padding: 0;
              height: 100%;
              width: 100%;
              text-align: center;
          }
          .fs-gal {
              width: 15%;
              height: 30%;
              float: center;
          }
		</style>
</head>

<body>
	<!-- HEADER -->
	<header id="home">
		<!-- NAVGATION -->
		<nav id="main-navbar">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="home.php"><img src="img/logo.png" alt="logo"></a>
						<a class="logo" href="home.php">Kaushalya Vikas Kendra</a>
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
					<li><a href="home.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li class="has-dropdown"><a href="programmes.php">Programmes</a>
					<ul class="dropdown">
						<li><a href="programmes.php">Programmes</a></li>
						<li><a href="training_technique.php">Training Technique</a></li>
					</ul>
					</li>

					
					<li><a href="events.php">Events</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li class="has-dropdown"><a href="contact.php">Contact</a>
					<ul class="dropdown">
						<li><a href="contact_us.php">Contact</a></li>
						<li><a href="support.php">Support KViK</a></li>
						<li><a href="help.php">Help</a></li>
					</ul>	
					</li>
					<li class="has-dropdown"><a href="#">Log In</a>
						<ul class="dropdown">
							<li><a href="index.php" target="_blank">Admin</a></li>
							<li><a href="index.php">Trainer</a></li>
							<li><a href="index.php">Volunteer</a></li>
							<li><a href="index.php">Trainee/Student</a></li>
							
						</ul>
					</li>
					
				</ul>
				<!-- Nav menu -->
			</div>
		</nav>
		<!-- /NAVGATION -->
		<div id='home-owl' class='owl-carousel owl-theme'>
				
		<?php
			include"database.php";
	
			$s="select * from slides where AID='4'";
			$res=$db->query($s);
			if($res->num_rows>0)
			{
				while($r=$res->fetch_assoc())
				{

					echo "
							<!-- home item -->
							<div class='home-item'>
								<!-- section background -->

								<div class='section-bg'> <img src='{$r["slide"]}'></div>
								<!-- /section background -->

								<!-- home content -->
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
								<!-- /home content -->
							</div>
							<!-- /home item -->
					";
				}
			}
			else
			{
				echo"
							<!-- home item -->
							<div class='home-item'>
								<!-- section background -->

								<div class='section-bg'> <img src='./img/subbu.jpg'></div>
								<!-- /section background -->

								<!-- home content -->
								<div class='home'>
									<div class='container'>
										<div class='row'>
											<div class='col-md-8'>
												<div class='home-content'>
													<h1>Skill for Life</h1>
													<p class='lead'>KViK stands for skill development centre : a skill
													for a lifelong livelihood and success!!</p>
													<a href='about.php' class='primary-button'>Click for More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /home content -->
							</div>
							<!-- /home item -->
							";
			}
			?>
			</div>
		<!-- /HOME OWL -->
	</header>
	<!-- /HEADER -->
	<br>
	<h3> 
	Gallery of Kaushalya Kendra Vikas</h3>
						<?php 
						$conn = mysqli_connect("localhost","id8550417_kvik","Praveen7*","id8550417_kvik");
						
						$query = "SELECT * FROM gallery";
						
						$result = mysqli_query($conn, $query);
						
						if(mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
								$url = $row["FilePath"]."/".$row["FileName"];
					?>
								<!--<a href="<?php echo $url; ?>"><image src="<?php echo $url; ?>" class="images" /></a>-->
									 <img class="fs-gal" src="<?php echo $url; ?>" data-url="<?php echo $url; ?>" />
					<?php
							}
						}
						else
						{
					?>
						<p>There are no images uploaded to display.</p>
					<?php
						}
					?>					
		
  <div class="fs-gal-view">
            <h1></h1>
            <img class="fs-gal-prev fs-gal-nav" src="popupimg/prev.svg" alt="Previous picture" title="Previous picture" />
            <img class="fs-gal-next fs-gal-nav" src="popupimg/next.svg" alt="Next picture" title="Next picture" />
            <img class="fs-gal-close" src="popupimg/close.svg" alt="Close gallery" title="Close gallery" />
            <img class="fs-gal-main" src="" alt="" />
        </div>

	<!-- FOOTER -->
	<footer id="footer" class="section">
		<!-- container -->
		<div class="container" >
			<!-- row -->
			<div class="row">
				<!-- footer contact -->
				<div class="col-md-4">
					<div class="footer">
						<div class="footer-logo">
							<a class="logo" href="#"><img src="./img/logo.png" alt=""><p>Kaushalya Vikas Kendra.</p></a>
						</div>
						<p style="text-align: justify;
  text-justify: inter-word;">Kaushalya Vikas Kendra (KViK) is a centre for skill development. Its prime objective is to make semi-literate youth from poor economic and social background ‘employable’ and to provide skilled manpower to the industries of high growth. </p>
						<ul class="footer-contact">
							<li><i class="fa fa-map-marker"></i> #7, Weavers Colony
Opposite Mangalya Ashirvad apartments,
Bannerghatta Road,
Bangalore – 560083</li>
							<li><i class="fa fa-phone"></i><?php echo $row1["phone1"] ?>, <?php echo $row1["phone2"] ?></li>
							<li><i class="fa fa-envelope"></i> <a href="mailto:kaushalyakendra@gmail.com">kaushalyakendra@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer contact -->

						<?php 
						include"database.php";
	
						$s="select * from gallery order by id desc limit 12";
						$res=$db->query($s);
						if($res->num_rows>0)
						{
							echo "	<div class='col-md-4'>
												<div class='footer'>
													<ul class='footer-galery'>
								
						";
							while($r=$res->fetch_assoc())
							{

								$url = $r["FilePath"]."/".$r["FileName"];
								echo " 
													
								<li><a href='gallery.php'><image src='$url'></a></li>";
							}

echo "


													</ul>

													</div>
											</div>";
							}
					?>
						
			
				<!-- footer newsletter -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Follow Kaushalya Vikas Kendra Blog via Email</h3>
						<p>Enter your email address to follow this blog and receive notifications of new posts by email.</p>
						<form class="footer-newsletter"><center>
							<input class="input" type="text" placeholder="Enter your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email address."></center>
							
							<button class="primary-button">Subscribe</button>
						</form>
						<ul class="footer-social">
							<li><a href="https://www.facebook.com/kaushalyavikaskendra.kendra" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://kaushalyakendra.org/contact-us/?share=twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://kaushalyakendra.org/contact-us/?share=google-plus-1"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer newsletter -->
			</div>
			<!-- /row -->

			<!-- footer copyright & nav -->
			<div id="footer-bottom" class="row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="galleryy.php">Gallery</a></li>

						<li><a href="programmes.php">Programmes</a></li>
						<li><a href="events.php">Events</a></li>
						
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact_us.php">Contact</a></li>

					</ul>
				</div>

			</div>
		</div>
		<br>
		<center><p>Copyright &copy; kaushalyakendra.org </p> </center>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<!-- jQuery Plugins --><script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="popupjs/fs-gal.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
