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


	<link rel="dns-prefetch" href="https://code.jquery.com" />
      <link rel="stylesheet" type="text/css" href="popupcss/fs-gal.css" />

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
			  .fs-gal {
              width: 15%;
              height: 30%;
              float: center;
          }
		</style>
</head>

<body>
	<?php include "menu.php" ?>

<header>
	
<div id="about" class="section" style="text-align: justify;
 	 								text-justify: inter-word;">
		<!-- container -->
		<div class="container">
	<br>
	<h3>




	Gallery </h3>
						<?php 
						$conn = mysqli_connect("localhost","root"," ","kvik");
						
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
    </div>
</div>
    </header>

<?php include "footer2.php" ?>
	<!-- jQuery Plugins -->
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>
		<!-- jQuery Plugins --><script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="popupjs/fs-gal.js"></script>


</body>

</html>
