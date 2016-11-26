<?php
	include 'fungsi.php';
	
	$data=$_GET['jk'];
	guest($data);

	header("location:index.php");
?>