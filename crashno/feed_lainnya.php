<?php
$id=$_GET['category'];
	$url='https://hack.kurio.co.id/v1/explore/group/'.$id.'';
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
	$id_categories = array();
	foreach ($json['featured']['data'] as $item) {
		array_push($id_categories, $item['id']);
	}

	function ambil($id){
		$url='https://hack.kurio.co.id/v1/feed/topic:'.$id;
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
	//return $json;
	//$temp = detail($id);
?>