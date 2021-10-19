
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

	<title>FREE BLOGGER</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Font font-awesomeme Icon -->
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



			
							<!-- article reply form -->
							<div class="article-reply" style='margin-left: 100px;'>
								<h4> Search Blog by</h4>
								<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
                                                                                        <label>Starting Date</label>
											<input type="date" class="input" name="start_date" placeholder="Starting Date">

											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
                                                                                <label>Ending Date</label>
										<input type="date" class="input" name="end_date" placeholder="Ending Date">
											
										</div></div>
										<div class="col-md-2">
											<div class="form-group">
										        <p></p>
													<button class="primary-button" name="submit">Submit</button>
									
											</div>
										</div>
											<form id="frm" autocomplete="off">
												<div class="col-md-2">
											<div class="form-group">
										
										
							<label>Blog Name</label>					
							<input type="text" id="txt" class="input" pattern="[a-zA-Z]{3,}" title="Enter only Alphabets" placeholder="Search by Blog Name">
						</div></div>
						</form>
						
						<div id="box"></div>
						
									</div>

									</form>

							</div>

					
				
						
				

<?php
	if(isset($_POST["submit"]))
	{

		include"database.php";
		
			$s="select * from blog where blog_date BETWEEN '{$_POST["start_date"]}' AND '{$_POST["end_date"]}' order by id desc";
			$res=$db->query($s);
			if($res->num_rows>0)
			{
				echo "<p style='margin-left: 110px;'>The following blogs are found between {$_POST["start_date"]} and {$_POST["end_date"]}";

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
												<a href='single-blog.php?id={$r["id"]}'>
													";?><img src=" <?php echo $r["blog_pic"] ?>" height="260" width="80" >
													<?php
													echo 
													"
												</a>
											</div>
											<div class='article-content'>
												<h3 class='article-title'><a href='single-blog.php?id={$r["id"]}'>{$r["blog_name"]}</a></h3>
												<ul class='article-meta'>
													<li> {$r["blog_date"]}</li>
													<li>By {$r["blog_by"]}</li>
												 
												</ul>
												<p>{$r["blog_heading"]}</p>

													<a href='single-blog.php?id={$r["id"]}' class='primary-button causes-donate'>More info</a>
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
			echo "<p style='margin-left: 110px;'>End of blogs which were found between {$_POST["start_date"]} and {$_POST["end_date"]}";

				
			}
				else
				{
					echo "<p style='margin-left:110px;'>Sorry. Blog not Found</p>";

					
				}
			}

				$s="select * from blog order by id desc limit 10";
			$res=$db->query($s);
			if($res->num_rows>0)
			{

				echo "<br><br><h4 style='margin-left: 110px;'>Latest Blogs</h4>";

				
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
									<a href='single-blog.php?id={$r["id"]}'>
										";?><img src="<?php echo $r["blog_pic"] ?>" height="260" width="80">
										<?php
										echo 
										"
									</a>
								</div>
								<div class='article-content'>
									<h3 class='article-title'><a href='single-blog.php?id={$r["id"]}'>{$r["blog_name"]}</a></h3>
									<ul class='article-meta'>
										<li> {$r["blog_date"]}</li>
										<li>By {$r["blog_by"]}</li>
									
									</ul>
									<p>{$r["blog_heading"]}</p>

										<a href='single-blog.php?id={$r["id"]}' class='primary-button causes-donate'>More info</a>
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



<?php include "footer2.php"?>


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
							$.post("search_prog.php",{s:txt},function(data){
								$("#box").html(data);
							});
						}
						
					});
					
					
					
				});
			</script>

		