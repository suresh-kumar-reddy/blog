		<?php
	include "database.php";
	session_start();
		$host="no";
		$temp="no";
		 $s1="update slides set host='$host',temp='$temp' where id={$_GET["id"]}";

		 $db->query($s1);
	echo "<script>window.open('preview_slides.php?mes=Data Deleted..','_self');</script>";
?>