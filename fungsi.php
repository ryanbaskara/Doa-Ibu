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
	function guest(){
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
		$jenis_kelamin = 'L'; //dapetin $_POST dari form nanti
		setCookieFunc("jenis_kelamin",$jenis_kelamin);
		setCookieFunc("access_token",$json['token']['access_token']);
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
		echo $json['token']['access_token'];
		echo "<br>";
		echo $jenis_kelamin;
		if (isset($_COOKIE['jenis_kelamin']) && isset($_COOKIE['access_token']) ) {
			echo "cookie set";
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
		} else {
			echo $json['message'];
		}
	}
?>