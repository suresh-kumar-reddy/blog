<?php
	include"database.php";
		$sql1="SELECT * FROM home_others WHERE id='1'";
		$res1=$db->query($sql1);

		if($res1->num_rows>0)
		{
			$row1=$res1->fetch_assoc();
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

<body>
		
<?php include "menu.php"?>

	<br><!-- /HEADER -->


	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				


          	<center><h4>Leave a Message</h4></center>
<br>
   <?php
            if(isset($_POST["submit"]))
            {
            	include "database.php";
                $sq="insert into contact(name,phone,email,subject,message,status) values('{$_POST["name"]}','{$_POST["phone"]}','{$_POST["email"]}','{$_POST["subject"]}','{$_POST["message"]}','Not Replied')";
                
                if($db->query($sq))
                {
                  echo "<div class='success'>Message sent Successfully</div>";

                }
                else
                {
                  echo "<div class='error'>Coudn't Send</div>";
             	 }
          

          
            }
          
          
          
          
          ?>
      <center>
          <form method="post" enctype="multipart/form-data"action="<?php echo $_SERVER["PHP_SELF"];?>">
         <div class="lbox" style="text-align: center; color: black">
          <input type="text" class="input" name="name" required  placeholder="Name" pattern="[a-zA-Z ]{3,}" title="Please enter more than three letters"><br><br>
  
        
            
         <input type="text" class="input"  pattern="[0-9]{10}" title="Only 10 digits allowed" name="phone" placeholder="Phone Number" required=""> <br><br>

        
          <input type="email" class="input" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email address." required="" placeholder="Email"  ><br><br>
          
          <input type="text" class="input" name="subject" required="" placeholder="Subject"><br><br>
        
          <textarea type="text" class="input" row="4" col="8" name="message" placeholder="Message"  required="" placeholder="Message"> 
          	</textarea><br><br>
         
      
     
      <button type="submit" class="primary-button" name="submit">Send</button><br><br><br>
        </div>
          </form>

	 </center>				</div>
				</div>

							
				<!-- /about content -->
				
			</div>
			</div>
		</div>
	</div>

<?php include "footer2.php"?>


	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
