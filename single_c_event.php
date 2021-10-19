
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
			<br><br><br><br>
			<div class="section-bg" style="background-image: url(./img/ethinic.jpg);"></div>
			<!-- /section background -->

			<!-- page header content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-content">
							<h1>Event</h1>
							<ul class="breadcrumb">
								<li><a href="home.php">Home</a></li>
								<li class="active">Signle-Event</li>
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
			include"database.php";
	
			$s="select * from c_events where id={$_GET["id"]}";
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
									<h3 class='article-title'>{$r["event_name"]}</h3>
									<ul class='article-meta'>
										<li>{$r["event_date"]}</li>
										<li>By  {$r["event_by"]}</li>
									
									</ul>
									<h4>{$r["description"]}</h4>
									<p>{$r["description"]}</p>

																	</div>
							</div>
						</div>
						<!-- /article -->

							<!-- event-meta -->
							<ul class='event-meta' style='margin-left: 18px;'>
								<li><h4>Event Details</h4></li>
								<br>
								<li><i class='fa fa-clock-o'></i><strong> Date: </strong>{$r["event_date"]} | {$r["event_time"]}</li>
								<br>
								<li><i class='fa fa-map-marker'></i><strong> Location: </strong> {$r["event_location"]}</li>
							</ul>
							<!-- /event-meta -->
";
}}
?>

<?php

$conn = mysqli_connect("localhost","id8550417_kvik","Praveen7*","id8550417_kvik");

$query = "SELECT * FROM c_event_gallery where id={$_GET["id"]}";
						
						$result = mysqli_query($conn, $query);
						
						if(mysqli_num_rows($result) > 0)
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
								<div class='row'>
									<br>
						<h4 style='margin-left:20px;'> Gallery of this Event</h4>
"
								;

								while($row = mysqli_fetch_assoc($result))
							{
								
									echo "	

									<!-- article -->
									<div class='col-md-6'>
										<div class='article'>
											<div class='article-img'>
												";
$url = $row["FilePath"]."/".$row["FileName"];
												?>

												<a href="<?php echo $url; ?>"><img src="<?php echo $url; ?>" alt="" > </a>
													<?php echo "
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
		}

?>
							<!-- article tags share -->
							<div class="article-tags-share" >
								<!-- article tags -->
								<!-- /article tags -->

								<!-- article share -->
								<ul class="share">
									<li>SHARE:</li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
								<!-- /article share -->
							</div>
							<!-- /article tags share -->

							<!-- article reply form -->
							<div class="article-reply" style='margin-left: 18px;'>
								<h3>Leave a reply</h3>
								<p>Please reply for the above event</p>
								<form>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<input class="input" placeholder="Name" type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<input class="input" placeholder="Email" type="email">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<input class="input" placeholder="Subject" type="text">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea class="input" placeholder="Message"></textarea>
											</div>
											<button class="primary-button">Submit</button>
										</div>
									</div>
								</form>
							</div>
							<!-- /article reply form -->
						</div>
						<!-- /article -->
					</main>
					<!-- /MAIN --></div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
<?php include "footer2.php"?>


	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
