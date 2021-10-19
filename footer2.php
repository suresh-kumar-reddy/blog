
<?php
	include"database.php";
		$sql1="SELECT * FROM home_others WHERE id='1'";
		$res1=$db->query($sql1);

		if($res1->num_rows>0)
		{
			$row1=$res1->fetch_assoc();
		}


?>


	<!-- FOOTER -->
	<footer id="footer" class="section">
		<!-- container -->
		<div class="container" >
			<!-- row -->
			<div class="row">
				<!-- footer contact -->
				<div class="col-md-4">
					<div class="footer">
						<div class="footer-logo">
							<a class="logo" href="blog.php"><img src="img/logo.png" alt="logo"></a>
						<a class="logo" href="blog.php" >FREE BLOGGER</a>
						</div>
						<p style="text-align: justify;
  text-justify: inter-word;">Fee Blogger is used to post your own blogs on free. </p>
						<ul class="footer-contact" >
							<li ><i class="fa fa-map-marker"></i> #7, Weavers Colony
Opposite Mangalya Ashirvad apartments,
Bannerghatta Road,
Bangalore – 560083</li>
							<li><i class="fa fa-phone"></i><?php echo $row1["phone1"] ?>, <?php echo $row1["phone2"] ?></li>
							
							<li><i class="fa fa-envelope"></i> <a href="mailto:kaushalyakendra@gmail.com">freeblogger@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer contact -->

						<?php 
						include"database.php";
	
						$s="select * from gallery order by id desc limit 12";
						$res=$db->query($s);
						if($res->num_rows>0)
						{
							echo "	<div class='col-md-4'>
												<div class='footer'>
													<ul class='footer-galery'>
								
						";
							while($r=$res->fetch_assoc())
							{

								$url = $r["FilePath"]."/".$r["FileName"];
								echo " 
													
								<li><a href='gallery.php'><image src='$url'></a></li>";
							}

echo "


													</ul>

													</div>
											</div>";
							}
					?>
						
			
				<!-- footer newsletter -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Follow Free Blogger via Email</h3>
						<p>Enter your email address to follow this blog and receive notifications of new posts by email.</p>


						


						<form class="footer-newsletter" method="post" enctype="multipart/form-data"><center>
							<input class="input" type="text" name="email" placeholder="Enter your email" required class ="input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email address.">
							
							<button class="primary-button" style="width: 270px;" name="submit">Subscribe</button></center>
						</form>
						<ul class="footer-social">
							<center>
							<li><a href="https://www.facebook.com/freeblogger" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</center></ul>
					</div>
				</div>
				<!-- /footer newsletter -->
			</div>
			<!-- /row -->
			
			<!-- footer copyright & nav -->
			<div id="footer-bottom" class="row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">

						

						<li><a href="contact_us.php">Conact Us</a></li>

						

						<li><a href="blog.php">Blog</a></li>
						<br>
			
					</ul>
				</div>

			</div>

		</div>
		<br>
	
		<center><p>Copyright &copy;FREE BLOGGER </p> </center>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->