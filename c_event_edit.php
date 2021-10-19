
<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>
<?php
	$sql="SELECT * FROM c_events WHERE id={$_GET["id"]}";
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
			
					<li class="has-dropdown"><a href="blog.php">Home Page</a>
					<ul class="dropdown">
						<li><a href="cms_slide.php">Edit Slides</a></li>
						<li><a href="cms_home_others.php">Home Others</a></li>
						<li><a href="cms_testmonial.php">Testimonials</a></li>
					</ul>
					</li>
					
					<li class="has-dropdown"><a href="blog.php">Programme Page</a>
					<li><a href="cms_blog.php">Blog</a></li>
			
					<ul class="dropdown">
						<li><a href="cms_events.php">Upcoming Programmes</a></li>
						<li><a href="cms_c_events.php">Current Programmes</a></li>
					</ul>
					</li>
					
					<li class="has-dropdown"><a href="cms_events.php">Events Page</a>
					<ul class="dropdown">
						<li><a href="cms_slide.php">Upcoming Events</a></li>
						<li><a href="cms_home_others.php">Current Events</a></li>
					
					</ul>
					</li>
										<li><a href="cms_gallery.php">Gallery</a></li>
							<li><a href="view_volunteer.php">View Volunteers </a></li>
							<li><a href="logout.php">Logout</a></li>
					
						
					</ul>
					
				
					
						
					
					
				
			</div>
		</nav>
					<br><br>
					<br><br>
					<br><br>
					<center>
							<a href="preview_upcoming_events.php">Go Back</a><br><br>


			<div id="section" style="margin-left:10px;">
				
				<div class="content">
				
					<h4>Manipulate</h4><br>
					<div class="lbox1">

							
					<?php
						if(isset($_POST["submit"]))
						{	
							$sql="update c_events set event_name='{$_POST["event_name"]}',event_date='{$_POST["event_date"]}',description='{$_POST["description"]}',description2='{$_POST["description2"]}',event_time='{$_POST["event_time"]}',event_location='{$_POST["event_location"]}' WHERE id={$_GET["id"]}";
						
							
										$db->query($sql);
										echo "<div class='success'>Updated Successfully</div>";
						
							$target="programme pics/";
							$target_file=$target.basename($_FILES["slide"]["name"]);
							if(move_uploaded_file($_FILES['slide']['tmp_name'],$target_file))
							{
								$sql="update c_events set slide='{$target_file}' WHERE id={$_GET["id"]}";
																		$db->query($sql);
										echo "<div class='success'>Updated Successfully</div>";

							}	
						}

					?>	
					<form  enctype="multipart/form-data" role="form"  method="post">
						 <label>Event Name</label>         		<br>
			
					     <input type="text" name="event_name" class="input" value="<?php echo $row["event_name"] ?>">
					     <br><br>
						 
						 <label>event_date</label><br>
				     <input type="text" name="event_date"  class="input" value="<?php echo $row["event_date"] ?>">
					     <br><br>
						   <label>Heading</label>
						   <br>
					     <input type="message" name="description"  class="input" value="<?php echo $row["description"] ?>">
					     <br><br>
					     <label>Description</label>
						   <br>
						      <input type="text" name="description2" class="input" value="<?php echo $row["description2"] ?>"> <br><br>
      					<br>
						  <label>Event Time</label>
						   <br>
						      <input type="text" name="event_time" class="input" value="<?php echo $row["event_time"] ?>"> <br><br>
      					<br>
						<label>Event Location</label>
						   <br>
						      <input type="text" name="event_location" class="input" value="<?php echo $row["event_location"] ?>"> <br><br>
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

