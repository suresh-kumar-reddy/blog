<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Add student</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
		
			<div id="section" style="margin-left:10px;">
				<?php include"sidebar.php";?><br><br><br>
				<h3 class="text">Welcome Prof.<?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content">
					
						<h3 >Add student</h3><br>
					<?php
						if(isset($_POST["submit"]))
						{
									$target="slides/";
							$target_file=$target.basename($_FILES["slide"]["name"]);
							if(move_uploaded_file($_FILES['slide']['tmp_name'],$target_file))
							{
								$sq="insert into slides(slide_number,heading,description,slide,AID) values('{$_POST["slide_number"]}','{$_POST["heading"]}','{$_POST["description"]}','{$target_file}','{$_SESSION["AID"]}')";
								
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
					<label> ID</label><br>
						<?php
							$no="S101";
							$sql="select * from slides order by ID desc limit 1";
							$res=$db->query($sql);
							if($res->num_rows>0)
							{
								$row1=$res->fetch_assoc();
								$no=substr($row1["slide_number"],1,strlen($row1["slide_number"]));
								$no++;
								$no="S".$no;
							}
						
						
						
						?>
					<input type="text" class="input3" name="slide_number" style="background:#b1b1b1;" value="<?php echo $no;?>" readonly  ><br><br>
					<label> Student Name</label><br>
					<input type="text" class="input3" name="heading"><br><br>
					<label> Father Name</label><br>
					<input type="text" class="input3" name="description"><br><br>
				<br></br>
					<label> Image</label><br>
					<input type="file"  class="input3" name="slide"><br><br>
			
			
			<button type="submit" style="float:right;" class="btn" name="submit">Add Student Details</button>
				</div>
					
				</form>
				
				<div class="tbox" >
					<h3 style="margin-top:30px;"> Subject Details</h3><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							<th>Slide Number</th>
							<th>Heading</th>
							<th>Descripton</th>
							<th>Slide</th>
						</tr>
						<?php
							$s="select * from slides";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo "
										<tr>
										<td>{$i}</td>
										<td>{$r["heading"]}</td>
										<td>{$r["description"]}</td>
	
										
										<td><img src='{$r["slide"]}' height='70' width='70'></td>
											
										<td><a href='slide_delete.php?id={$r["id"]}' class='btnr'>Delete</a></td>
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
				
				</div>
				
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>