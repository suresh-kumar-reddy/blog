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
		<title>Edit upcoming_programmes</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
		
			<div id="section" style="margin-left:10px;">
				<?php include"sidebar.php";?><br><br><br>
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content">
					
						<h3 >Edit upcoming_programmes</h3><br>
					<?php
						if(isset($_POST["submit"]))
						{
							$target="upcoming programmes/";
							$target_file=$target.basename($_FILES["slide"]["name"]);
							if(move_uploaded_file($_FILES['slide']['tmp_name'],$target_file))
							{
								$sq="insert into upcoming_programmes(slide_number,heading,description,page_link,slide,AID) values('{$_POST["slide_number"]}','{$_POST["heading"]}','{$_POST["description"]}','{$target_file}','{$_SESSION["AID"]}')";
								
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
					<input type="text" class="input3" name="slide_number" style="background:#b1b1b1;" value="<?php echo $no;?>" readonly  ><br><br>
					<label>Slide Heading</label><br>
					<input type="text" class="input3" name="heading"><br><br>
					<label>Slide Description</label><br>
					<input type="text" class="input3" name="description"><br><br>
						<label>Slide Image</label><br>
					<input type="file"  class="input3" name="slide" required=""><br><br>
			
			
			<button type="submit" style="float:left;" class="btn" name="submit">Insert</button>
				</div>
					
				</form>
				<div class="lbox">
				
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
							<th>Slide Number</th>
							<th>Heading</th>
							<th>Descripton</th>
			
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
				</div>
				
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>