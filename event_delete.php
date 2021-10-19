<?php
	include "database.php";
	session_start();
	$s1="INSERT INTO archive_events SELECT * FROM events WHERE id={$_GET["id"]}";
	$s="delete from events where id={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('preview_upcoming_events.php?mes=Data Deleted..','_self');</script>";
?>