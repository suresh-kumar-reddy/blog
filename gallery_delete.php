<?php
	include "database.php";
	session_start();
	
	$s="delete from gallery where id={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('gallery_delete.php?mes=Data Deleted..','_self');</script>";
?>