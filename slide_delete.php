<?php
	include "database.php";
	session_start();
	$s1="INSERT INTO archive_slides SELECT * FROM slides WHERE id={$_GET["id"]}";
	$db->query($s1);
	$s="delete from slides where id={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('preview_slides.php?mes=Data Deleted..','_self');</script>";
?>