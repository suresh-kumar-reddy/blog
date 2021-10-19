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

					<br><br><br><br>					
					<center>
					<h3 >Messages received</h3><br><br><br>
					<center><h3>Search message by</h3></center>				
							<!-- article reply form -->
							<div class="article-reply" style='margin-left: 100px;'>
								
								<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
											    <select class="input" name="meslimit">
										          	<option value="" >Sort</option>
										          	<option value="50">Recent 50</option>
										          	<option value="100">Recent 100</option>
										          	<option value="200">Recent 200</option>
										          	<option value="300">Recent 300</option>
										          	
										          </select> 
										      
																					</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
										
													<button class="primary-button" name="submit">Submit</button>
									
											</div>
										</div>
											<form id="frm" autocomplete="off">
												<div class="col-md-2">
											<div class="form-group">
										
										
												
							<input type="text" id="txt" class="input" title="Type anything" placeholder="Search message by headers">
						</div></div>
						</form>
						
						<div id="box"></div>
						
									</div>

									</form>

							</div>

					
				
						
				
<?php 
	if(isset($_POST["submit"]))
	{

echo "
					
					<table border='1px' >
						<tr>
							<th>S.No</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Mail</th>
							
							<th>Subject</th>
							
							<th>Message</th>
							<th>Reply:</th>
							<th>If replied Click</th>
							<th>Delete:</th>
							<th>status</th>

						</tr>
						";
						

							$s="select * from contact order by id desc limit {$_POST["meslimit"]}";
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
											<td>{$r["name"]}</td>
											<td>{$r["phone"]}</td>
											<td>{$r["email"]}</td>
											
											
											<td>{$r["subject"]}</td>
											<td>{$r["message"]}</td>
												<td><a href='mailto:{$r["email"]}'    class='btnr'> Click</a></td>

										<td><a href='message_reply.php?id={$r["id"]}' class='btnr'>Yes</a></td>					
										<td><a href='message_delete.php?id={$r["id"]}' class='btnr'>Yes</a></td>
	<td>{$r["status"]}</td>
											
										</tr>";
									
									
									
								
}

							
							
								}
					
				echo "
					</table>
					 
					 ";}
					 ?><br><br>
					
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Mail</th>
							
							<th>Subject</th>
							
							<th>Message</th>
							<th>Reply</th>
							<th>Replied?</th>
							<th>Delete</th>
							<th>Status</th>
						</tr>
						<?php
							$s="select * from contact order by id desc limit 15";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo"
										<tr>
											<td>{$i}</td>
											<td>{$r["name"]}</td>
											<td>{$r["phone"]}</td>
											<td>{$r["email"]}</td>
											
											
											<td>{$r["subject"]}</td>
											<td>{$r["message"]}</td>
												<td><a href='mailto:{$r["email"]}'   class='btnr'>Click</a></td>

										<td><a href='message_reply.php?id={$r["id"]}' class='btnr'>Yes!!</a></td>	
											
										<td><a href='message_delete.php?id={$r["id"]}' class='btnr'>Yes!!</a></td>
	
											<td>{$r["status"]}</td>
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
				</center>
				</div>
				
				
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
<script>
				$(document).ready(function(){
					$("#txt").keyup(function(){
						var txt=$("#txt").val();
						if(txt!="")
						{
							$.post("search_message.php",{s:txt},function(data){
								$("#box").html(data);
							});
						}
						
					});
					
					
					
				});
			</script>