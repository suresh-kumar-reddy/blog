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
	<header id="home">
		<nav id="main-navbar">
			<div class="container">
			
				<div class="navbar-header">
					<div class="navbar-brand">
						<a class="logo" href="home.php"><img src="img/logo.png" alt="logo"></a>
						<a class="logo" href="home.php">Kaushalya Vikas Kendra</a>
					</div>

					<button class="navbar-toggle-btn">
						<i class="fa fa-bars"></i>
					</button>
				</div>

				<ul class="navbar-menu nav navbar-nav navbar-right">
					<li class="active"><a href="home.php" >Home</a></li>
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
							<li><a target = '_blank' href="index.php"?sna=$sna >Admin</a></li>
							<li><a href="index.php">Trainer</a></li>
							<li><a href="index.php">Volunteer</a></li>

							
						</ul>
					</li>
					
				</ul>
			</div>
		</nav>
	


		
		<!-- Page Header -->
		<div id="page-header">
			<!-- section background -->
			<br><br><br><br>
			<div class="section-bg" style="background-image: url(./img/ele6.jpg);"></div>
			<!-- /section background -->

			<!-- page header content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-content">
							<h1>Offered Programme</h1>
							<ul class="breadcrumb">
								<li><a href="home.php">Home</a></li>
								<li class="active">Signle-Programme</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header content -->
		</div>
		<!-- /Page Header -->

	<!-- EVENTS -->
				<!-- /section title -->
				<?php
				include"database.php";
	
				$s="select * from upcoming_programmes where id={$_GET["id"]}";
				$res=$db->query($s);
				if($res->num_rows>0)
				{

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
						<div class='col-md-13'>
							<div class='article'>
								<div class='article-img'>
									";?>
										<img src="<?php echo $r["slide"] ?>" alt="">
										<?php
										echo 
										"
									</a>
								</div>
								<div class='article-content'>
									<h3 class='article-title'>{$r["heading"]}</a></h3>
									<ul class='event-meta'>
												<li><i class='fa fa-money' ></i> {$r["price"]}</li>
											</ul><br>
											<h4>{$r["description"]}</h4>
											<p>{$r["description2"]}</p>									</div>
							</div>
						</div>";
}}
?>
</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

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
						<li><a href="gallery.php">Gallery</a></li>

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
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
