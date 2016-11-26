<?php
	$base_url = 'https://hack.kurio.co.id/v1/';
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
		$url_login = 'auth/signup';
		$data = array('email' => $email, 'password' => $password, 'name'=>$device_token);
		$opts = array(
			'http'=>array(
				'method'=>"POST",
				'header'=>"Content-Type: application/x-www-form-urlencoded\r\n" .
						"Accept: application/json\r\n" .
						"X-Kurio-Client-ID: 99\r\n" .
						"X-Kurio-Client-Secret: S3VyaW9IYWNrYXRvbjIw\r\n" .
						"X-OS: windows\r\n" .
						"X-App-Version: 1.0\r\n",
				'content' => json_encode($data)
				)
		);

		$context=stream_context_create($opts);
		$url=$base_url.$url_login;
		$content=file_get_contents($url,false,$context);
		
		return $content;
	}
	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$temp = login($email,$password);
		if ($json['code']=='42') {
			echo $json['message'];
		} else {
			echo "login sukses";
		}
	}
	/*$temp = login('ryan.baskara@gmail.com','ryan1234');
	$json= json_decode($temp,true);
	echo $json['id'];*/
?>