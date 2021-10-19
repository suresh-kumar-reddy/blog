<?php
	include "database.php";
	session_start();
	$s1="INSERT INTO archive_upcoming_programmes SELECT * FROM upcoming_programmes WHERE id={$_GET["id"]}";
	$s="delete from upcoming_programmes where id={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('cms_upcoming_programmes.php?mes=Data Deleted..','_self');</script>";
?>