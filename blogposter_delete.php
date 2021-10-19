<?php
	include "database.php";
	session_start();
	$s1="INSERT INTO archive_blogposters SELECT * FROM blogposter WHERE BID={$_GET["BID"]}";
	$s="delete from blogposter where BID={$_GET["BID"]}";
	$db->query($s);
	echo "<script>window.open('view_blogposter.php?mes=Data Deleted..','_self');</script>";
?>