<?php
	include('database.php');
	if(isset($_POST['submit']))
	{
		if(isset($_POST['editor']) && !empty($_POST['editor']))

		{
			$content=$_POST['editor'];
		}
		else
		{
			$empty_error='<b class="text-danger text-center">Please fill the textarea </b>';
		}
		if (isset($content) && !empty($content))
		{
			$insert_q="INSERT INTO support (content) values ('$content')";
			if(mysqli_query($db,$insert_q))
			{
				header('Location: show_support.php');

			}else
			{
				$submit_error='<b class="text-danger text-center">Couldnt submit. try again </b>';
			}

		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>About page</title>
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


	<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>

	<?php
	include ('menu_admin.php');
?><br>
			<div id='about' class='section' style='text-align: justify;
 	 								text-justify: inter-word;'>
		<!-- container -->
		<div class='container'>
			<!-- row -->
			<div class='row'>
				<!-- about content -->
				<div class='col-md-12'>
								
					<div class='about-content'>
					
	
	<a class="btn btn-success" href="cms_support.php">Home </a>
	<a class="btn btn-success" href="show_support.php">Show</a>

	<form action="" method="post" enctype="multipart/form-data">
		<textarea class="ckeditor" name="editor"></textarea>
		<br>
		<button type="submit" name="submit" class="btn btn-success">Submit </button>

	</form>
			</div>
				</div>
				<!-- /about content -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->
	<br>
	<br>

</body>
</html>