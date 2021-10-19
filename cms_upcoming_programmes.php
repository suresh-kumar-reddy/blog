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
		?>
		
			<div style="text-align: center; color: black;">

<br><br><br><br>					<br>
						<h4 >Modify upcoming programmes</h4>
					<?php
						if(isset($_POST["submit"]))
						{
							$target="upcoming/";
							$target_file=$target.basename($_FILES["slide"]["name"]);
							if(move_uploaded_file($_FILES['slide']['tmp_name'],$target_file))
							{
								$sq="insert into upcoming_programmes(slide_number,heading,description,price,description2,slide,AID) values('{$_POST["slide_number"]}','{$_POST["heading"]}','{$_POST["description"]}','{$_POST["price"]}','{$_POST["description2"]}','{$target_file}','{$_SESSION["AID"]}')";
								
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
					<label>Slide Number</label><br>
						<?php
							$no="S1";
							$sql="select * from upcoming_programmes order by id desc limit 1";
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
					<label>Slide Heading</label><br>
					<input type="text" class="input" name="heading"><br><br>
					<label>Slide Description</label><br>
					<input type="text" class="input" name="description"><br><br>
					<label>price</label><br>
					<input type="number" name="price" pattern="[0-9]" class="input" ><br><br>
									
					<label>Description</label><br>
					
					
						<textarea type="text" class="input" name="description2" rows="20" cols="20"></textarea><br><br>
				
					<label>Slide Image</label><br>
					<center>
					<input type="file"  class="input" name="slide" required="">
					</center>
					<br>
			
			<button style="text-align: center;" type="submit" class="primary-button" name="submit">Insert</button>
				</div>
					
				</form>
				<center>
				<div>
				<br><br>
					<h3>Slide Details</h3><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px">
						<tr>
							<th>Slide</th>
							<th>Slide Number</th>
							<th>Name</th>
							<th>Heading</th>
							<th>Price</th>

							<th>Want to Delete?</th>
						</tr>
						<?php
							$s="select * from upcoming_programmes order by id desc";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								
								while($r=$res->fetch_assoc())
								{
										echo "
										<tr>
										<td><img src='{$r["slide"]}' height='70' width='70'></td>
					
										<td>{$r["slide_number"]}</td>
										
										<td>{$r["heading"]}</td>
										<td>{$r["description"]}</td>
										<td>{$r["price"]}</td>
										
										<td><a href='upcoming_programmes_delete.php?id={$r["id"]}' class='btnr'>Yes!!</a></td>
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
				</div>
				</center>
				</div>
				
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>