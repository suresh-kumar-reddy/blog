<div class="sidebar"><br>
<h3 class="text">Dashboard to Edit the Pages</h3><br><hr><br>
<ul class="s">
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
			<li class="li"><a href="edit_home.php">Home Page</a></li>
			<li class="li"><a href="cms_about.php">About Page</a></li>
			
			<li class="li"><a href="edit_programmes.php">Programmes Page</a></li>
			<li class="li"><a href="edit_events.php">Events Page</a></li>
			<li class="li"><a href="cms_blog.php">Blog Page</a></li>
			<li class="li"><a href="cms_contact.php">Contact Page</a></li>
			<li class="li"><a href="cms_support.php">Support Page</a></li>
			<li class="li"><a href="cms_help.php">Help Page</a></li>
			<li class="li"><a href="cms_gallery.php">Gallery</a></li>
			<li class="li"><a href="view_volunteer.php">View Volunteers</a></li>
			
			<li class="li"><a href="logout.php">Logout</a></li>
		
		';
	
	
	}
	else{
		echo'
			<li class="li"><a href="teacher_home.php"> Profile</a></li>
			<li class="li"><a href="handle_class.php"> Handled Class</a></li>
			<li class="li"><a href="add_stud.php"> Add Students</a></li>
			<li class="li"><a href="view_stud_teach.php" target="_blank"> View Student</a></li>

			<li class="li"><a href="tech_view_exam.php"> View Exam</a></li>
			<li class="li"><a href="add_mark.php"> Add Marks</a></li>
			<li class="li"><a href="view_mark.php"> View Result</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>

		
		';
	}


?>
	

</ul>

</div>