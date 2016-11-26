<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<div>
	<h3>Login</h3>
	<form method="post" action="fungsi.php">
		<input type="email" name="email">
		<input type="password" name="password">
		<button type="submit" name="login" value="login">Login</button>
	</form>
	</div>
	<div>
	<h3>Register</h3>
		<form method="post" action="fungsi.php">
		Email: <input type="email" name="email"><br>
		Nama: <input type="text" name="nama"><br>
		Tanggal Lahir: <input type="date" name="lahir"><br>
		Jenis Kelamin: <input type="radio" name="jenis_kelamin" value="L">L
		<input type="radio" name="jenis_kelamin" value="P">P<br>
		Password: <input type="password" name="password"><br>
		<button type="submit" name="register" value="register">Register</button>
	</form>
	</div>
</body>
</html>