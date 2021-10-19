<?php
	include "database.php";
	session_start();
	$s1="INSERT INTO archive_test_monial SELECT * FROM test_monial WHERE id={$_GET["id"]}";
	$s="delete from test_monial where id={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('cms_testmonial.php?mes=Data Deleted..','_self');</script>";
?>