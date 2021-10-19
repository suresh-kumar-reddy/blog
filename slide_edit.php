
<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>
<?php
	$sql="SELECT * FROM slides WHERE id={$_GET["id"]}";
		$res=$db->query($sql);

		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
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
					</div>

					<button class="navbar-toggle-btn">
						<i class="fa fa-bars"></i>
					</button>
				</div>

				<ul class="navbar-menu nav navbar-nav navbar-right">
					<li><a href="admin_home.php">Admin Home</a></li>
			
					<li class="has-dropdown"><a href="slides.php">Home Page</a>
					<ul class="dropdown">
						<li><a href="cms_slide.php">Edit Slides</a></li>
						<li><a href="cms_home_others.php">Home Others</a></li>
						<li><a href="cms_testmonial.php">Testimonials</a></li>
					</ul>
					</li>

					<li class="has-dropdown"><a href="slides.php">Program Page</a>
					<ul class="dropdown">
						<li><a href="cms_events.php">Upcoming Programs</a></li>
						<li><a href="cms_c_events.php">Current Programs</a></li>
					</ul>
					</li>
						<li class="has-dropdown"><a href="slides.php">Events Page</a>
					<ul class="dropdown">
						<li><a href="cms_slide.php">Upcoming Events</a></li>
						<li><a href="cms_home_others.php">Current Events</a></li>
					
					</ul>
					</li>
					<li class="has-dropdown"><a href="cms_contact.php">Contact Page</a>
					<ul class="dropdown">
						<li><a href="cms_support.php">Support Page</a></li>
						
					
					</ul>
					</li>
										<li><a href="cms_gallery.php">Gallery</a></li>
							<li><a href="view_volunteer.php">View Volunteers </a></li>
							<li><a href="logout.php">Logout</a></li>
					
						
					
					
				
			</div>
		</nav>
					<br><br>
					<br><br>
					<br><br>
					<center>
							<a href="preview_slides.php">Go Back</a><br><br>


			<div id="section" style="margin-left:10px;">
				
				<div class="content">
				
					<h4>Manipulate</h4><br>
					<div class="lbox1">

							
					<?php
						if(isset($_POST["submit"]))
						{	
							$sql="update slides set heading='{$_POST["heading"]}',description='{$_POST["description"]}',page_link='{$_POST["page_link"]}' WHERE id={$_GET["id"]}";
						
							
										$db->query($sql);
										echo "<div class='success'>Updated Successfully</div>";
						
							$target="slides/";
							$target_file=$target.basename($_FILES["slide"]["name"]);
							if(move_uploaded_file($_FILES['slide']['tmp_name'],$target_file))
							{
								$sql="update slides set slide='{$target_file}' WHERE id={$_GET["id"]}";
																		$db->query($sql);
										echo "<div class='success'>Updated Successfully</div>";

							}	
						}

					?>	
					<form  enctype="multipart/form-data" role="form"  method="post">
					
						 <label>Heading</label>         		<br>
			
					     <input type="text" name="heading" class="input" value="<?php echo $row["heading"] ?>">
					     <br><br>
						 
						   <label>Description</label>
						   <br>
					     <input type="message" name="description"  class="input" value="<?php echo $row["description"] ?>">
					     <br><br>
					     <label>Link</label>
						   <br>
					     <input type="text" name="page_link"  class="input" value="<?php echo $row["page_link"] ?>">
					     <br><br>
					    <br>
						<br>

					<label>Image</label><br>
					<center>
					<input type="file"  class="input" name="slide" value="">
					<br>
					<?php echo "<img src='{$row["slide"]}' height='90' width='90'>"; ?>


					</center>
	<br>
						
						<button style="text-align: center;" type="submit" style="float:left;" class="primary-button" name="submit">Update</button><br>
						</form>
					</div>

				</div>
			</div>
	
				<?php include"footer.php";?>
				<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>

