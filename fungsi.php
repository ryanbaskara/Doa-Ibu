<?php
	include 'connect.php';
	function login($email, $password){
		$base_url = 'https://hack.kurio.co.id/v1/';
		$url_login = 'auth/login';
		$device_token = "test";
		$data = array('email' => $email, 'password' => $password, 'device_token'=>$device_token);
		$opts = array(
			'http'=>array(
				
				'header'=>"Accept: application/json\r\n" .
						"X-Kurio-Client-ID: 99\r\n" .
						"X-Kurio-Client-Secret: S3VyaW9IYWNrYXRvbjIw\r\n" .
						"X-OS: windows\r\n" .
						"X-App-Version: 1.0\r\n" .
						"Content-Type: application/x-www-form-urlencoded\r\n",
				'method'=>"POST",
				'content' => json_encode($data)
				)
		);

		$context=stream_context_create($opts);
		$url=$base_url.$url_login;
		$content=file_get_contents($url,false,$context);

		return $content;
	}

	function register($email, $password, $name){
		$base_url = 'https://hack.kurio.co.id/v1/';
		$url_register = 'auth/signup';
		$data = array('email' => $email, 'password' => $password, 'name'=>$name);
		$opts = array(
			'http'=>array(
				'header'=>"Content-Type: application/x-www-form-urlencoded\r\n" .
						"Accept: application/json\r\n" .
						"X-Kurio-Client-ID: 99\r\n" .
						"X-Kurio-Client-Secret: S3VyaW9IYWNrYXRvbjIw\r\n" .
						"X-OS: windows\r\n" .
						"X-App-Version: 1.0\r\n",
				'method'=>"POST",
				'content' => json_encode($data)
				)
		);

		$context=stream_context_create($opts);
		$url=$base_url.$url_register;
		$content=file_get_contents($url,false,$context);
		// $json= json_decode($content,true);
		// echo $json['id'];
		return $content;
	}
	//register('puntosly29@yahoo.co.id','b3400sgz','Punto');
	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$temp = login($email,$password);
		$json= json_decode($temp,true);
		$coba = http_response_code();
		//$e = $json['code'];
		if ($coba==200) {
			echo "login sukses";
		} else {
			echo $json['message'];
		}
	}
	else if(isset($_POST['register'])){
		$email = $_POST['email'];
		$nama = $_POST['nama'];
		$tanggallahir = $_POST['lahir'];
		$jeniskelamin = $_POST['jenis_kelamin'];
		$password = $_POST['password'];
		$temp = register($email,$password,$nama);
		$coba = http_response_code();
		$json = json_decode($temp,true);
		if ($coba==200) {
			$id = $json['id'];
			$query = mysql_query("INSERT INTO user VALUES('$id','$tanggallahir','$jeniskelamin')");
			if ($query==1) {
				echo "register sukses";
			}
			//echo "register sukses";
		} else {
			echo $json['message'];
		}
	}
	// $temp = login('ryan.baskara@gmail.com','ryan1234');
	// $json= json_decode($temp,true);
	// echo $json['id'];
?>