<?php
	include"database.php";
		
	

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
	 <link rel="dns-prefetch" href="https://code.jquery.com" />
      <link rel="stylesheet" type="text/css" href="popupcss/fs-gal.css" />
      <style type="text/css">
          /* For demo only */
          html, body {
              margin: 0;
              padding: 0;
              height: 100%;
              width: 100%;
              text-align: center;
          }
          .fs-gal {
              width: 15%;
              height: 80%;
              float: center;
          }
</style>
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
			<div class="section-bg" style="background-image: url(./img/k.jpg);"></div>
			<!-- /section background -->

			<!-- page header content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-content">
							<h1></h1>
							<ul class="breadcrumb">
								<li><a href="home.php"></a></li>
								<li class="active"></li>
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
$sql="SELECT * FROM about_content";
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

	<div id="about" class="section">

	<div style="text-align: left; 
	margin-left: 105px;">
	<h4>Downloadable documents</h4>
 	<?php
 	
 	$files=scandir("pdf_uploads");
 	for ($a=2;$a<count($files); $a++)
 	{
 		?>
 		<p>
 		<a href="pdf_uploads/<?php echo $files[$a] ?>" target=_blank> <?php echo $files[$a] ?></a>
 	</p>
 <?php

 	}

?> 	
<br><br>
</div>

</div>
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
						
			<h3>Brochure</h3>
			<!--<a href="img/brchfront.jpg" >
 			<img src="img/brchfront.jpg" alt="" height="397"></a>
 			<a href="img/brchmission.jpg" >
			<img src="img/brchmission.jpg" alt="" height="397"></a>
 			<a href="img/brchmatter2.jpg" >
			<img src="img/brchmatter2.jpg" alt="" height="397"></a>
 			<a href="img/brchmap.jpg" >
			<img src="img/brchmap.jpg" alt="" height="397"></a>
 			<a href="img/brchmatter1.jpg" >
			<img src="img/brchmatter1.jpg" alt="" height="397"></a>-->
				<?php
			include"database.php";
	
			$s="select * from about where AID='4'";
			$res=$db->query($s);
			
			if($res->num_rows>0)
			{	
				while($r=$res->fetch_assoc())
				{
	
				echo "
			<img class='fs-gal' src='{$r["br_pic"]}' data-url='{$r["br_pic"]}' />
        ";
    }
}
    ?>

        <div class="fs-gal-view">

            <h1></h1>
            <img class="fs-gal-prev fs-gal-nav" src="popupimg/prev.svg" alt="Previous picture" title="Previous picture" />
            <img class="fs-gal-next fs-gal-nav" src="popupimg/next.svg" alt="Next picture" title="Next picture" />
            <img class="fs-gal-close" src="popupimg/close.svg" alt="Close gallery" title="Close gallery" />
            <img class="fs-gal-main" src="" alt="" />
        </div> 			<br>
 			<br>
 			

 		</div>
 	</div>

 


<?php
 include "footer2.php"
?>


	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="popupjs/fs-gal.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
