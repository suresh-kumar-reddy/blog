
<?php
	include"database.php";
		$sql1="SELECT * FROM home_others WHERE id='1'";
		$res1=$db->query($sql1);

		if($res1->num_rows>0)
		{
			$row1=$res1->fetch_assoc();
		}
		$s="SELECT * FROM blog WHERE id={$_GET["id"]}";
		$q = mysqli_query($db,$s);
		 while(
		 $ro= mysqli_fetch_assoc($q)) 
		 {$visits=$ro['visitors'];
		$visits=$visits+1;
		}
		$sql="update blog set visitors='$visits' where id={$_GET["id"]}";
		$qrr = mysqli_query($db,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="icon" href="img/logo.png">

	<title>FREE BLOGGER</title>

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
			<div class="section-bg" style="background-image: url(./img/bk1.jpg);"></div>
			<!-- /section background -->

			<!-- page header content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-content">
							<h1>Blog</h1>
							
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
	
			$s="select * from blog where id={$_GET["id"]}";
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
						<div class='col-md-6'>
							<div class='article'>
								<div class='article-img'>
								
										";?>
										<img src="<?php echo $r["blog_pic"] ?>" height="260" width="80" >
										<?php
										echo 
										"
									</a>
								</div>
								<div class='article-content'>
									<br><br><h3 class='article-title'>{$r["blog_name"]}</h3>
									<ul class='article-meta'>
										<li>{$r["blog_date"]}</li>
										<li>By  {$r["blog_by"]}</li>
									
									</ul><br>
									<h4>{$r["blog_heading"]}</h4>
									<br>
									<p>{$r["description"]}</p>

																	</div>
							</div>
						</div>
						<!-- /article -->

							<!-- event-meta -->
							<ul class='event-meta' style='margin-left: 18px;'>
								<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><li><h4>Blog Details</h4></li>
								<br>
								<li><i class='fa fa-clock-o'></i><strong> Date: </strong>{$r["blog_date"]} | {$r["blog_time"]}</li>
								<br>
								<li><i class='fa fa-map-marker'></i><strong> Location: </strong> {$r["blog_location"]}</li>
							</ul>
							<!-- /event-meta -->
";
}}
?>

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
