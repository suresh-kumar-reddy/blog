<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
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

<body style="text-align: center;" background="img/pattern.png">
	<header id="home">
		<nav id="main-navbar">
			<div class="container">
			
				<div class="navbar-header">
					<div class="navbar-brand">
						<a class="logo" href="admin_home.php"><img src="img/logo.png" alt="logo"></a>
					</div>

					<button class="navbar-toggle-btn">
						<i class="fa fa-bars"></i>
					</button>
				</div>

				<ul class="navbar-menu nav navbar-nav navbar-right">
					<li><a href="admin_home.php">Admin Home</a></li>
			
					<li class="has-dropdown"  style="background-color: #DBDBDB;"><a href="programmes.php">Home Page</a>
					<ul class="dropdown">
						<li><a href="cms_slide.php">Edit Slides</a></li>
						<li><a href="cms_home_others.php">Home Others</a></li>
						<li><a href="cms_testmonial.php">Testimonials</a></li>
					</ul>
					</li>

					<li class="has-dropdown"><a href="programmes.php">Program Page</a>
					<ul class="dropdown">
						<li><a href="cms_programmes.php">Current Programmes</a></li>
						<li><a href="cms_upcoming_programmes.php">Upcoming Programmes</a></li>
					</ul>
					</li>
				<li><a href="cms_blog.php">Blog</a></li>
				
						<li class="has-dropdown"><a href="programmes.php">Events Page</a>
					<ul class="dropdown">
						<li><a href="cms_events.php">Upcoming Events</a></li>
						<li><a href="cms_c_events.php">Current Events</a></li>
					
					</ul>
					</li>

					
					<li><a href="cms_gallery.php">Gallery</a></li>
							<li><a href="view_volunteer.php">View Volunteers </a></li>
							<li><a href="logout.php">Logout</a></li>
					
						
					
					
				
			</div>
		</nav>


		
			<div id="section" style="margin-left:10px;">
			
				<div class="content">
					<br><br><br><br>
						<h4 >Add Test Monial</h4><br>
					<?php
						if(isset($_POST["submit"]))
						{
							$target="test monial/";
							$target_file=$target.basename($_FILES["slide"]["name"]);
							if(move_uploaded_file($_FILES['slide']['tmp_name'],$target_file))
							{
								$sq="insert into test_monial(slide_number,name,designation,description,slide,AID) values('{$_POST["slide_number"]}','{$_POST["name"]}','{$_POST["designation"]}','{$_POST["description"]}','{$target_file}','{$_SESSION["AID"]}')";
								
								if($db->query($sq))
								{
									echo "<div class='success'>Insert Success</div>";
								}
								else
								{
									echo "<div class='error'>Insert Failed</div>";
								}
							}
					

					
						}
					
					
					
					
					?>
			
				<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<label>Test Monial Number</label><br>
						<?php
							$no="S1";
							$sql="select * from test_monial order by id desc limit 1";
							$res=$db->query($sql);
							if($res->num_rows>0)
							{
								$row1=$res->fetch_assoc();
								$no=substr($row1["slide_number"],1,strlen($row1["slide_number"]));
								$no++;
								$no="S".$no;
							}
						
						
						
						?>
					<input type="text" class="input" name="slide_number" style="background:#b1b1b1;" value="<?php echo $no;?>" readonly  ><br><br>
					<label>Test Monial Name</label><br>
					
					 <input type="text" class="input" name="name" required autofocus placeholder="Name" pattern="[a-zA-Z ]{3,}" title="Please enter more than three letters"><br><br>
					<label>Designation</label><br>
					<input type="text" class="input" name="designation" required=""><br><br>
					<br>
					<label>Description</label><br>
						<textarea type="text" class="input" name="description" rows="20" cols="20"></textarea><br><br>
				
					<label>Image</label><br>
					<center>
					<input type="file"  class="input" name="slide" required="">
			
			<br>
			<button style="text-align: center;" type="submit" style="float:left;" class="primary-button"" name="submit">Insert</button>
			</center>
				</div>
					
				</form>
				<center>
				<br><br>
					<h3 style="margin-top:30px;">Slide Details</h3><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							<th>Slide</th>
							<th>name</th>
							<th>Designation</th>
							
							<th>Description</th>
							<th>Want to Delete?</th>
						</tr>
						<?php
							$s="select * from test_monial order by id desc";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								
								while($r=$res->fetch_assoc())
								{
										echo "
										<tr>
										<td><img src='{$r["slide"]}' height='40' width='40'></td>
					
										
										<td>{$r["name"]}</td>
										<td>{$r["designation"]}</td>
										<td>{$r["description"]}</td>
	
	
										
											
										<td><a href='test_monial_delete.php?id={$r["id"]}' class='btnr'>Yes!!</a></td>
										</tr>
									
									";
									
								}
								
							}
							else
							{
								echo "No Record Found";
							}
						?>
						
					</table>
					</center>
	
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