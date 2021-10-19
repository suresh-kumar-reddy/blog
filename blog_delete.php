<?php
	include "database.php";
	session_start();
	$s1="INSERT INTO archive_blogs SELECT * FROM blog WHERE id={$_GET["id"]}";
	$db->query($s1);
	
	$s="delete from blog where id={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('cms_blog.php?mes=Data Deleted..','_self');</script>";
?>