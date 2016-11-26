<?php
	error_reporting(0);
	$connect = mysql_connect('localhost','root', 'ryan1234') or die(mysql_error());
	$dbselect = mysql_select_db('doa_ibu');
?>