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
		<?php include "menu_admin.php";
		?><br><br><br><br><br>
		<div>
			<center>
		

<?php

	if(isset($_POST["submit"]))
	{

	 include"database.php";

	 $targetfolder = "pdf_uploads/";

	 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
	 $ok=1;

	 $file_type=$_FILES['file']['type'];


	 $target="brouchure_pics/";

							$target_file=$target.basename($_FILES["slide"]["name"]);


							if(move_uploaded_file($_FILES['slide']['tmp_name'],$target_file))
							{
								$sq="insert into about(br_pic,AID) values('{$target_file}','{$_SESSION["AID"]}')";
								if($db->query($sq))
 								{
									echo "<div class='success'>Insert Success</div>"; 
								}
								else
								{
									echo "<div class='error'>Insert failed</div>";	
								}

								
							}
 
							if ($file_type=="application/pdf")
							{
								if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

								 {
 									echo "<div class='success'>Insert Success</div>";
								
								}
							}
 							else
 							{

								echo "<div class='error'>Please upload only pdf</div>"; 
							}
	}
 ?>
 <form  method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
<label>Upload a pdf file
</label>
<br><br>
<input type="file" name="file" size="50" />

<br />
	<label>Brouchure pics</label><br>
	<input type="file"  class="input3" name="slide"><br><br>
	
<input type="submit" value="Upload" name="submit"/>

</form>
		</div>	

</header>	
				<?php include"footer.php";?>
				<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>
