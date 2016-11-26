<?php
function topStoriesGambar(){
		$url='https://hack.kurio.co.id/v1/feed/top_stories';
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
		$i=0;
		$gambar = array();
		foreach ($json['data'] as $item) {
			if($i < 5){
				array_push($gambar, $item['thumbnail']['url']);
				$i++;
			}
			else break;
		}

		// while ($i<5) {
		// 	$text[i]==$json['data']['text'];
		// 	$image[i]==$json['data']['thumbnail']['url'];
		// }
		return $gambar;
	}

function topStoriesJudul(){
		$url='https://hack.kurio.co.id/v1/feed/top_stories';
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
		$i=0;
		$judul = array();
		foreach ($json['data'] as $item) {
			if($i < 5){
				array_push($judul, $item['title']);
				$i++;
			}
			else break;
		}

		// while ($i<5) {
		// 	$text[i]==$json['data']['text'];
		// 	$image[i]==$json['data']['thumbnail']['url'];
		// }
		return $judul;
	}
	//echo topStories();
	// $temp=topStoriesGambar();
	// print_r($temp);
	// $temp = topStoriesJudul();
	// echo $temp[3];
	//echo $temp[1];
?>