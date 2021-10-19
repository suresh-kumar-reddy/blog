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
			<div style="text-align: center;color: black;">
			
				<br><br>
					<br><br>
					<h4 >Modify Upcoming Events</h4><br>
					<?php
						if(isset($_POST["submit"]))
						{
							$target="upcoming events/";
							$target_file=$target.basename($_FILES["slide"]["name"]);
							if(move_uploaded_file($_FILES['slide']['tmp_name'],$target_file))
							{
								$sq="insert into events(event_number,event_name,event_date,event_by,description,description2,event_time,event_location,slide,AID) values ('{$_POST["event_number"]}','{$_POST["event_name"]}','{$_POST["event_date"]}','{$_POST["event_by"]}','{$_POST["description"]}','{$_POST["description2"]}','{$_POST["event_time"]}','{$_POST["event_location"]}','{$target_file}','{$_SESSION["AID"]}')";
								
								if($db->query($sq))
								{
									echo "<div class='success'>Insert Success</div>";
								}
								else
								{
									echo "<div class='error'>Insert Failed</div>";
								}
							}
					

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
				
				$sq="insert into u_event_gallery(id,FilePath,FileName) values ('{$_POST["id"]}','Upload','".$newFileName."')";
					
			}		
		$count = count($errors);
		
		if($count != 0){
			foreach($errors as $error){
				echo $error."<br/>";
			}
		}

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
					<label>Event Number</label><br>
						<?php
							$no="S1";
							$sql="select * from events order by id desc limit 1";
							$res=$db->query($sql);
							if($res->num_rows>0)
							{
								$row1=$res->fetch_assoc();
								$no=substr($row1["event_number"],1,strlen($row1["event_number"]));
								$no++;
								$no="S".$no;
								$row1["id"]++;
							}
						
						
						
						?>
						<input type="text" class="input" name="id" style="background:#b1b1b1;" value="<?php 
						
						 echo $row1["id"] ?>" readonly  ><br><br>
					
					<input type="text" class="input" name="event_number" style="background:#b1b1b1;" value="<?php echo $no;?>" readonly  ><br><br>
					<label>Event Name</label><br>
					<input type="text" class="input" name="event_name" required=""><br><br>
					<label>Event Date</label><br><br>
					<input type="date" name="event_date" required="" class="input">
					<br>
					<br>
					<br>
					<label>Posted by</label><br>
					<input type="text" class="input" name="event_by" required=""><br><br>
					<label>Heading</label><br>
					<input type="text" class="input" name="description" required=""><br><br>
					<label>Description</label><br>
							<textarea type="text" class="input" name="description2" rows="20" cols="20"></textarea><br><br>
				<label>Time</label><br>
					<input type="time" class="input" name="event_time" required=""><br><br>
					<label>Location</label><br>
					<input type="text" class="input" name="event_location" required=""><br><br>
					
					<label>Main pic</label><br>
					<center>
					<input type="file"  class="input" name="slide" required="">
			</center><br>
			<center>
						<label for="exampleInputFile">Addition Pics</label>
					
								<br><br>
						<input type="file" id="exampleInputFile" name="files[]" multiple="multiple" required="" class="input">
					

					<br><br>
			<button style="text-align: center;" type="submit" class="primary-button" name="submit">Insert</button> <br>
			
				</div>
					
				</form>
				<div class="lbox">
				
					<h5 style="margin-top:30px;" class="primary-button"> <a style="text-align: center;"" href="preview_upcoming_events.php" class="primary-button" style="margin-top:30px;">Preview</h5></a>
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

<script>
				$(document).ready(function(){
					$("#txt").keyup(function(){
						var txt=$("#txt").val();
						if(txt!="")
						{
							$.post("search_u_events.php",{s:txt},function(data){
								$("#box").html(data);
							});
						}
						
					});
					
					
					
				});
			</script>