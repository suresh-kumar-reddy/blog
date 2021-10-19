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

	
</head>

<body style="text-align: center;" background="img/pattern.png">
	<header id="home">
				<?php include "menu_admin.php";
		?>
		<br><br><br>	<br>
					<h4 >Add Gallery</h4><br>
					<?php
						if(isset($_POST["submit"]))
						{
								
								
					$errors = array();
		
		$extension = array("jpeg","jpg","png","gif");
		
		$bytes = 1024;
		$allowedKB = 1000000;
		$totalBytes = $allowedKB * $bytes;
		
		if(isset($_FILES["files"])==false)
		{
			echo "<b>Please, Select the files to upload!!!</b>";
			return;
		}
		
		$conn = mysqli_connect("localhost","id8550417_kvik","Praveen7*","id8550417_kvik");	
		
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
		{
			$uploadThisFile = true;
			
			$file_name=$_FILES["files"]["name"][$key];
			$file_tmp=$_FILES["files"]["tmp_name"][$key];
			
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);

			if(!in_array(strtolower($ext),$extension))
			{
				array_push($errors, "File type is invalid. Name:- ".$file_name);
				$uploadThisFile = false;
			}				
			
			if($_FILES["files"]["size"][$key] > $totalBytes){
				array_push($errors, "File size must be less than 10000KB. Name:- ".$file_name);
				$uploadThisFile = false;
			}
			if($uploadThisFile)
			{
				$filename=basename($file_name,$ext);
				$newFileName=$filename.$ext;				
				move_uploaded_file($_FILES["files"]["tmp_name"][$key],"Upload/".$newFileName);
				
				$sq="insert into gallery(gallery_number,gallery_name,gallery_date,gallery_by,description,gallery_link,AID) values ('{$_POST["gallery_number"]}','{$_POST["gallery_name"]}','{$_POST["gallery_date"]}','{$_POST["gallery_by"]}','{$_POST["description"]}','{$_POST["gallery_link"]}','{$_SESSION["AID"]}')";
					
								if($db->query($sq))
								{
													echo "<div class='success'>Insert Success</div>";
								}
								else
								{
									echo "<div class='error'>Insert Failed</div>";
								}	

				$sq2="insert into gallery_pics(gallery_number,FilePath,FileName) values('{$_POST["gallery_number"]}','Upload','".$newFileName."')";	
				if($db->query($sq2))
								{
													echo "<div class='success'>Insert Success</div>";
								}
								else
								{
									echo "<div class='error'>Insert Failed</div>";
								}	
			}
		}
		
		mysqli_close($conn);
		
		$count = count($errors);
		
		if($count != 0){
			foreach($errors as $error){
				echo $error."<br/>";
			}
		}

					
						
					
					
							}
					
					
					?>
			
				<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<div class="lbox">
					<label>Gallery number</label><br>
						<?php
							$no="G1";
							$sql="select * from gallery order by id desc limit 1";
							$res=$db->query($sql);
							if($res->num_rows>0)
							{
								$row1=$res->fetch_assoc();
								$no=substr($row1["gallery_number"],1,strlen($row1["gallery_number"]));
								$no++;
								$no="S".$no;
							}
						
						
						
						?>
					<input type="text" class="input" name="gallery_number" style="background:#b1b1b1;" value="<?php echo $no;?>" readonly  ><br><br>
					<label>Event Name</label><br>
					<input type="text" class="input" name="gallery_name" required=""><br><br>
					<label>Event Date</label><br><br>
					<input type="date" name="gallery_date" required="" class="input">
					<br>
					<br>
					<label>Posted by</label><br>
					
					 <input type="text" class="input" name="gallery_by" required autofocus placeholder="" pattern="[a-zA-Z ]{3,}" title="Please enter more than three letters"><br><br>
					
					<label>Description</label><br>
							<textarea type="text" class="input" name="description" rows="20" cols="20"></textarea><br><br>
				
					<label>Event Link</label><br>
			
					<input type="text" class="input" name="gallery_link" required="">
					<br><br>
			
					
					<center>
						<label for="exampleInputFile">Select PICS to upload:</label>
					
								<br><br>
						<input type="file" id="exampleInputFile" name="files[]" multiple="multiple" required="">
					

					<br><br>
					<button type="submit" style="text-align: center;" class="primary-button" name="submit">Insert</button>
			</center>
				</div>
		</form>
		<div class="lbox">
				
					<label style="margin-top:55px;" class="primary-button"><a style="text-align: center;"" href="preview_gallery.php" class="primary-button" style="margin-top:30px;">Preview Gallery</a></label>
		</div>		
				
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/js/bootstrap.min.js"></script>
		
		<script src="js/js/jQuery.Form.js"></script>
		
		</div>
				
				
			</div>	
		
		<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>
				<?php include"footer.php";?>
	
	</body>
</html>
<script>
function mydate()
{
  //alert("");
document.getElementById("dt").hidden=false;
document.getElementById("ndt").hidden=true;
}
function mydate1()
{
 d=new Date(document.getElementById("dt").value);
dt=d.getDate();
mn=d.getMonth();
mn++;
yy=d.getFullYear();
document.getElementById("ndt").value=dt+"-"+mn+"-"+yy
document.getElementById("ndt").hidden=false;
document.getElementById("dt").hidden=true;
}
</script>