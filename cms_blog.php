<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["BID"]))
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
	
	<title>FREE BLOGGER</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link type="text/css" rel="stylesheet" href="css/style.css" />

        <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet"> 
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>

</head>

<body style="text-align: center;" background="img/pattern.png">
	<header id="home">
				<?php include "menu_admin.php";
		?>
			<div style="text-align: center;color: black;">
			
			<br><br>
	
					<br><br>
					<h4 >Blog</h4><br>
					<?php
						if(isset($_POST["submit"]))
						{       include"database.php";
							$target="Blog/";
							$target_file=$target.basename($_FILES["slide"]["name"]);
							if(move_uploaded_file($_FILES['slide']['tmp_name'],$target_file))
							{
								$sq="insert into blog(blog_number,blog_name,blog_heading,description,blog_date,blog_by,blog_time,blog_location,blog_pic,BID) values ('{$_POST["blog_number"]}','{$_POST["blog_name"]}','{$_POST["blog_heading"]}','{$_POST["description"]}','{$_POST["blog_date"]}','{$_POST["blog_by"]}','{$_POST["blog_time"]}','{$_POST["blog_location"]}','{$target_file}','{$_SESSION["BID"]}')";
									$errors = array();

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
				<div class="lbox">
					<label>ID</label><br>
						<?php
							$no="B1";
							$sql="select * from blog order by id desc limit 1";
							$res=$db->query($sql);
							if($res->num_rows>0)
							{
								$row1=$res->fetch_assoc();
								$no=substr($row1["blog_number"],1,strlen($row1["blog_number"]));
								$no++;
								$no="B".$no;
															$row1["id"]++;
							}
						
						
						
						?>
					<input type="text" class="input" name="id" style="background:#b1b1b1;" value="<?php echo $row1["id"] ?>" readonly  ><br><br>
					<label>Blog Number</label><br>
					<input type="text" class="input" name="blog_number" style="background:#b1b1b1;" value="<?php echo $no;?>" readonly  ><br><br>
					<label>Blog Name</label><br>
					<input type="text" class="input" name="blog_name" required=""><br><br>
					<label>Blog Heading</label><br>
					<input type="text" class="input" name="blog_heading" required=""><br><br>
					<label>Description</label><br>
								<input type="text" class="input" name="description" required=""><br><br>
		
					<label>Blog Date</label><br><br>
				
											<input type="date" class="input" name="blog_date" placeholder="Date">	<br>
					<br>
					<br>
					<label>Posted by</label><br>
					
					 <input type="text" class="input" name="blog_by" required  placeholder="" pattern="[a-zA-Z ]{3,}" title="Please enter more than three letters"><br><br>
						<br>
					<label>Blog Time</label><br>
					<input type="time" class="input" name="blog_time" required=""><br><br>
					<label>Blog Location</label><br>
					<input type="text" class="input" name="blog_location" required=""><br><br>
					
					<label>Blog front pic</label><br>
					<center>
					<input type="file"  class="input" name="slide" required="">
			</center><br>
					
					
					<br>
			
			<button style="text-align: center;" type="submit" class="primary-button" name="submit">Insert</button> <br>
			
				</div>
					
				</form>
				
				<div class="lbox">
				<br>
					<h5  class="primary-button"> <a style="text-align: center;"" href="preview_blog.php" class="primary-button" style="margin-top:30px;">Preview</h5></a>
					<br>
					<br>
							<div class="content1">
					
						<h4> Enter Event name to search</h4><br>
						<form id="frm" autocomplete="off">
							<input type="text" id="txt" class="input" pattern="[a-zA-Z]{3,}" title="Enter only Alphabets">
						</form>
						<br>
						<div id="box"></div>
						
					</div>
				</div>
				
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


<script>
				$(document).ready(function(){
					$("#txt").keyup(function(){
						var txt=$("#txt").val();
						if(txt!="")
						{
							$.post("search_blog.php",{s:txt},function(data){
								$("#box").html(data);
							});
						}
						
					});
					
					
					
				});
			</script>