
<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["BID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>
<?php
	$sql="SELECT * FROM blog WHERE id={$_GET["ids"]}";
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
	
	<title>FREE BLOGGER</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<script src="ckeditor/ckeditor.js" type="text/javascript"></script>

</head>

<body>
	<header id="home">
		
<?php include "menu_admin.php"?>

			<br><br>
					<br><br>
					<br><br>
					<center>
							<a href="preview_blog.php">Go Back</a><br><br>


			<div id="section" style="margin-left:10px;">
				
				<div class="content">
				
					<h4>Manipulate</h4><br>
					<div class="lbox1">

							
					<?php
						if(isset($_POST["submit"]))
						{	
							$sql="update blog set blog_name='{$_POST["blog_name"]}',blog_heading='{$_POST["blog_heading"]}',blog_by='{$_POST["blog_by"]}',blog_date='{$_POST["blog_date"]}',description='{$_POST["description"]}',blog_time='{$_POST["blog_time"]}',blog_location='{$_POST["blog_location"]}' WHERE id={$_GET["ids"]}";
						
							
										$db->query($sql);
										echo "<div class='success'>Updated Successfully</div>";
						
							$target="Blog/";
							$target_file=$target.basename($_FILES["slide"]["name"]);
							if(move_uploaded_file($_FILES['slide']['tmp_name'],$target_file))
							{
								$sql="update blog set blog_pic='{$target_file}' WHERE id={$_GET["ids"]}";
																		$db->query($sql);
										echo "<div class='success'>Updated Successfully</div>";

							}	
						}

					?>	
					<form  enctype="multipart/form-data" role="form"  method="post">
						 <label>Blog Name</label>         		<br>
			
					     <input type="text" name="blog_name" class="input" value="<?php echo $row["blog_name"] ?>">
					     <br><br>
						 
						 <label>Blog Heading</label>         		<br>
			
					     <input type="text" name="blog_heading" class="input" value="<?php echo $row["blog_heading"] ?>">
					     <br><br>
						  <label>Blog by</label>         		<br>
			
					     <input type="text" name="blog_by" class="input" value="<?php echo $row["blog_by"] ?>">
					     <br><br>
						 
						 
						 <label>Blog Date</label><br>
				     <input type="text" name="blog_date"  class="input" value="<?php echo $row["blog_date"] ?>">
					     <br><br>
						   <label>Description</label>
						   <br>
 <textarea class="ckeditor" name="description"> <?php  
		echo $row["description"] ?></textarea>

						
					     <br><br>
					     <label>Blog Time</label>
						   <br>
						      <input type="text" name="blog_time" class="input" value="<?php echo $row["blog_time"] ?>"> <br><br>
      					<br>

  						<label>Blog Location</label>
						   <br>
						      <input type="text" name="blog_location" class="input" value="<?php echo $row["blog_location"] ?>"> <br><br>
      					<br>
      					
					<label>Image</label><br>
					<center>
					<input type="file"  class="input" name="slide" value="">
					<br>
					<?php echo "<img src='{$row["blog_pic"]}' height='90' width='90'>"; ?>
                                        
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

