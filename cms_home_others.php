<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>
<?php
	$sql="SELECT * FROM home_others WHERE id='1'";
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
		<?php include"navbar.php";?>
	
			<div id="section" style="margin-left:10px;">
				
				<div class="content">
				
					<h4>Manipulate</h4><br>
					<div class="lbox1">

							
					<?php
						if(isset($_POST["submit"]))
						{	
							$sql="update home_others set about='{$_POST["about"]}',about_link='{$_POST["about_link"]}',e_name='{$_POST["e_name"]}',e_heading='{$_POST["e_heading"]}',e_description='{$_POST["e_description"]}',latest_event_link='{$_POST["latest_event_link"]}',important_requirement='{$_POST["important_requirement"]}',requirement_link='{$_POST["requirement_link"]}',youtube_link='{$_POST["youtube_link"]}',trained='{$_POST["trained"]}',trained_name='{$_POST["trained_name"]}',donated='{$_POST["donated"]}',donated_name='{$_POST["donated_name"]}',volunteers='{$_POST["volunteers"]}',volunteers_name='{$_POST["volunteers_name"]}',trainers='{$_POST["trainers"]}',trainers_name='{$_POST["trainers_name"]}',volunteer_heading='{$_POST["volunteer_heading"]}',volunteer_description='{$_POST["volunteer_description"]}',volunteer_link='{$_POST["volunteer_link"]}',phone1='{$_POST["phone1"]}',phone2='{$_POST["phone2"]}',paytm='{$_POST["paytm"]}',googlepay='{$_POST["googlepay"]}'  where id='1'";
							$target="programme pics/";
							$target_file=$target.basename($_FILES["slide"]["name"]);
							if(move_uploaded_file($_FILES['slide']['tmp_name'],$target_file))
							{
							
								$sq="update home_others set slide='{$target_file}'";
											$db->query($sq);
											echo "<div class='success'>Inserted Successfully</div>";				
							}
								$db->query($sql);
											echo "<div class='success'>Updated Successfully</div>";
										}
								
					?>	
					<form  enctype="multipart/form-data" role="form"  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
						 <label>About</label>         		<br>
			
					     <input type="text" name="about"  class="input" value="<?php echo $row["about"] ?>">
					     <br><br>
						 <label>Link for About</label>         		<br>
			
					     <input type="text" name="about_link"  class="input" value="<?php echo $row["about_link"] ?>">
					     <br><br>
						 
						 <label>Name for the Latest Event</label>         		<br>
			
					     <input type="text" name="e_name"  class="input" value="<?php echo $row["e_name"] ?>">
					     <br><br>
						 
						 <label>Heading for the Latest Event</label><br>
				     <input type="text" name="e_heading"  class="input" value="<?php echo $row["e_heading"] ?>">
					     <br><br>
						   <label>Description for the Latest Event</label>
						   <br>
					     <textarea type="text" class="input" name="e_description" rows="20" cols="20" ><?php echo $row["e_description"] ?></textarea>
					     <br><br>
					     <label>Latest Event Link</label>
						   <br>
					     <input type="text" name="latest_event_link" class="input" value="<?php echo $row["latest_event_link"] ?>">
					     <br><br>
						  <label>Important Requirement</label>
						   <br>
						   
					     <input type="text" name="important_requirement"  class="input" value="<?php echo $row["important_requirement"] ?>">
					     <br><br>
					     <label>Link for Important Requirement</label>
						   <br>
					     <input type="text" name="requirement_link"  class="input" value="<?php echo $row["requirement_link"] ?>">
					     <br><br>
						<label>Paste YouTube Link</label>       
					     <br>
					     <input type="text" name="youtube_link"  class="input" value="<?php echo $row["youtube_link"] ?>">
					     <br><br>
					     	 <label>Name for Numbers design1</label>         		<br>
			
					     <input type="text" name="trained_name"  class="input" value="<?php echo $row["trained_name"] ?>">
					     <br><br>
					
					     <label>Value for the Numbers design1 </label><br>
					     <input type="number" name="trained"  class="input" pattern="[0-9]" value="<?php echo $row["trained"] ?>">
					     
						<br><br>
							 <label>Name for the Numbers design2</label>         		<br>
			
					     <input type="text" name="donated_name"  class="input" value="<?php echo $row["donated_name"] ?>">
					     <br><br>
					
						<label>Value for the Numbers design2</label><br>
					    <input type="number" name="donated" pattern="[0-9]" class="input" value="<?php echo $row["donated"] ?>">

						<br><br>
							 <label>Name for the Numbers design3</label>         		<br>
			
					     <input type="text" name="volunteers_name"  class="input" value="<?php echo $row["volunteers_name"] ?>">
					     <br><br>
					
					    <label>Value for the Numbers design3</label><br>
					   
					    <input type="number" class="input"  pattern="[0-9]" title="Only digits allowed" name="volunteers" placeholder="Number of Volunteers" value="<?php echo $row["volunteers"] ?>">
					     
						<br><br>
							 <label>Name for the Numbers design4</label>         		<br>
			
					     <input type="text" name="trainers_name"  class="input" value="<?php echo $row["trained_name"] ?>">
					     <br><br>
					
						<label>Value for the Numbers design4</label><br>
					    <input type="number" class="input"  pattern="[0-9]" title="Only digits allowed" name="trainers" placeholder="Number of Trainers" required=""value="<?php echo $row["trainers"] ?>">

						<br><br>
						<label>Volunteer Heading</label><br>
					    <input type="text" class="input"    name="volunteer_heading" required=""value="<?php echo $row["volunteer_heading"] ?>">

						<br><br>
						<label>Volunteer Description</label><br>
					    <input type="text" class="input"  name="volunteer_description"  required=""value="<?php echo $row["volunteer_description"] ?>">

						<br><br>
						<label>Volunteer Link</label><br>
					    <input type="text" class="input" name="volunteer_link"  required=""value="<?php echo $row["volunteer_link"] ?>">

						<br><br>
						<label>Landline Number</label><br>
					   
					    <input type="text" class="input"  pattern="[0-9]{10}" title="Only 10 digits allowed" name="phone1" placeholder="Landline Number" required="" value="<?php echo $row["phone1"] ?>"> 

						<br><br>
						<label>Contact Number</label><br>
					     <input type="text" class="input"  pattern="[0-9]{10}" title="Only 10 digits allowed" name="phone2" placeholder="contact Number" required="" value="<?php echo $row["phone2"] ?>"> 
					    <br>
						<br>

						<label>Paytm Number</label><br>
					    <input type="text" class="input"  pattern="[0-9]{10}" title="Only 10 digits allowed" name="paytm" placeholder="Paytm Number" required="" value="<?php echo $row["paytm"] ?>"> 
					    <br>
						<br>

						<label>Google Pay Number</label><br>
					   
					      <input type="text" class="input"  pattern="[0-9]{10}" title="Only 10 digits allowed" name="googlepay" placeholder="Google Pay Number" required="" value="<?php echo $row["googlepay"] ?>"> 
					    <br>
						<br>

					<label>Image</label><br>
					<center>
					<input type="file"  class="input" name="slide">
						<br>
					<?php echo "<img src='{$row["slide"]}' height='90' width='90'>"; ?>


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