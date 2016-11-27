<?php 	
	unset($_COOKIE['login']);
    setcookie('login', null, -1, '/');
    unset($_COOKIE['jenis_kelamin']);
    setcookie('jenis_kelamin', null, -1, '/');
    nset($_COOKIE['name']);
    setcookie('name', null, -1, '/');
    header('location:index.php');
 ?>