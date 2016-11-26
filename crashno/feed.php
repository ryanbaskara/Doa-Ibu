<?php
	function setCookieFunc($cookie_name,$cookie_value){
	  	$number_of_days = 1 ;
	  	$date_of_expiry = time() + 60 * 60 * 24 * $number_of_days ;
	  	setcookie($cookie_name, $cookie_value, $date_of_expiry, "/");
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
		 		$jumlah_array--;
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

	$id=$_GET['id'];
	function detail($id){
		$url='https://hack.kurio.co.id/v1/article/'.$id;

		$opts = array(
					'http'=>array(
							'method'=>'GET',
							'header'=>"Accept:application/json\r\n" .
									"X-Kurio-Client-ID:99\r\n" .
									"X-Kurio-Client-Secret:S3VyaW9IYWNrYXRvbjIw\r\n" .
									"X-OS:windows\r\n" .
									"X-App-Version:1.0\r\n" .
									"Authorization:Bearer YKtzmrkSKD6rvesV9e7PfPuKSNlFCIWg9Acq5G2Z\r\n"
						)
				);
		$context=stream_context_create($opts);
		$content=file_get_contents($url,false,$context);
		$json = json_decode($content,true);
		return $json;
	}
	$json = detail($id);

	lastRead($id);
	if (isset($_COOKIE['lastRead'])) {
		$queue = json_decode($_COOKIE['lastRead']);
		$jumlah_array = count($queue);
		$data = array();
		for ($i=0; $i < $jumlah_array ; $i++) {
			$temp = detail($queue[$i]);//id gambar judul
			$gambar = $temp['source']['icon'];
			$judul = $temp['title'];
			$id = $queue[$i];
		 	array_push($data,array('id' => $id,
		 						'image'=> $gambar,
		 						'title'=>$judul));
		 }
	} else {
		$data = NULL;
	}
?>