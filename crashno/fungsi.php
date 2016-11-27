<?php
	include 'connect.php';
	function setCookieFunc($cookie_name,$cookie_value){
	  	$number_of_days = 1 ;
	  	$date_of_expiry = time() + 60 * 60 * 24 * $number_of_days ;
	  	setcookie($cookie_name, $cookie_value, $date_of_expiry, "/");
	}
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
	function guest($jeniskelamin){
		$base_url = 'https://hack.kurio.co.id/v1/';
		$url_login = 'auth/guest';
		$device_token = "test";
		$uuid = "bebas";
		$data = array('uuid' => $uuid,'device_token'=>$device_token);
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
		$json= json_decode($content,true);
		
		setCookieFunc("jenis_kelamin",$jeniskelamin);
		setCookieFunc("access_token",$json['token']['access_token']);
		setCookieFunc("name","guest");
		echo $json['token']['access_token'];

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
		return $content;
	}
	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$temp = login($email,$password);
		$json= json_decode($temp,true);
		$id = $json['id'];
		echo $id;
		echo "<br>";
		$query = mysql_query("SELECT * FROM user WHERE u_id = '$id'");
		$row = mysql_fetch_array($query);
		$jenis_kelamin = $row['u_jenis_kelamin'];
		setCookieFunc("jenis_kelamin",$jenis_kelamin);
		setCookieFunc("access_token",$json['token']['access_token']);
		setCookieFunc("login",1);
		setCookieFunc("name",$json['name']);
		header('location:index.php');
		
	}
	else if(isset($_POST['register'])){
		$email = $_POST['email']; echo $email;
		$nama = $_POST['nama']; echo $nama;
		$tanggallahir = date();
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
			setCookieFunc("jenis_kelamin",$jeniskelamin);
			setCookieFunc("access_token",$json['token']['access_token']);
			setCookieFunc("name",$json['name']);
			setCookieFunc("login",1);
		} else {
			echo $json['message'];
		}
		header('location:index.php');
	}

	function lastRead($id_story){
		$queue = array();
		//add multiple items
		if (isset($_COOKIE['lastRead'])) {
			$queue = json_decode($_COOKIE['lastRead']);
		} else{
			$queue = array();
		}
		$jumlah_array = count($queue);
		for ($i=0; $i < $jumlah_array ; $i++) { 
		 	if ($queue[$i]==$id_story) {
		 		array_splice($queue, $i, 1);
		 	}
		 } 
		$queue = array_reverse($queue);
		array_push($queue, $id_story);
		if ($jumlah_array>4) {
			array_shift($queue);
		}
		$json = json_encode(array_reverse($queue));
		setCookieFunc("lastRead",$json);
	}
?>