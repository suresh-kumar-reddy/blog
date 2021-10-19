<?php

include('database.php');

if(isset($_GET['delid']))

{
	$id=$_GET['delid'];
	$query="DELETE FROM support where id='$id'";
	$result=mysqli_query($db,$query);
	if($result)
	{
		echo "deleted";
		header('Location: show_support.php');

	}
	else
	{
		echo "error";
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

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>
	<?php
	include ('menu_admin.php');
?>
		
<div id='about' class='section' style='text-align: justify;
 	 								text-justify: inter-word;'>
		<!-- container -->
		<div class='container'>
			<!-- row -->
			<div class='row'>
				<!-- about content -->
				<div class='col-md-12'>
								
					<div class='about-content'>
	
	<br>
	<a class="btn btn-success" href="cms_support.php">Home </a>
	<a class="btn btn-success" href="show_support.php">Show</a>
	<br>
	<br>

	<table class="table table-striped table-bordered">
		<tr>
			<th>ID</th>
			<th>Content</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		<?php

		$query="select * from support";
		$result=mysqli_query($db,$query);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>".$row["id"]."</td>";

				echo "<td>".$row["content"]."</td>";

				echo '<td><a href="update_support.php?id='.$row['id'].'" type="button" class="btn btn-primary btn-sm"><span class="fa fa-edit"></span></a></td>';
				echo '<td><a href="show_support.php?delid='.$row['id'].'" type="button" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a></td>';
				
				echo "</tr>";


			}
		}

		?>	
	</table>
			</div>
				</div>
				<!-- /about content -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	

</body>
</html>

















