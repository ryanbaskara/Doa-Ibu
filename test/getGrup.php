<?php
	function otentikasi ($auth)
	{
		$opts = array(
				'http'=>array(
					'method'=>"GET",
					'header'=>"Accept: application/json\r\n" .
							"X-Kurio-Client-ID: 99\r\n" .
							"X-Kurio-Client-Secret: S3VyaW9IYWNrYXRvbjIw\r\n" .
							"X-OS: windows\r\n" .
							"X-App-Version: 1.0\r\n" .
							"Authorization: Bearer " . $auth . "\r\n"
					)
			);

		$context=stream_context_create($opts);

		return $context;
	}

	function ambilDataCoCe($jenisKelamin)
	{
		$groupMan = array();
		array_push($groupMan, 9);
		array_push($groupMan, 15);
		array_push($groupMan, 8);
		array_push($groupMan, 1);
		array_push($groupMan, 2);
		array_push($groupMan, 3);
		array_push($groupMan, 4);
		array_push($groupMan, 5);
		array_push($groupMan, 6);
		array_push($groupMan, 7);
		array_push($groupMan, 10);
		array_push($groupMan, 11);
		array_push($groupMan, 12);
		array_push($groupMan, 13);
		array_push($groupMan, 14);

		$groupWoman = array();
		array_push($groupWoman, 3);
		array_push($groupWoman, 4);
		array_push($groupWoman, 7);
		array_push($groupWoman, 1);
		array_push($groupWoman, 2);
		array_push($groupWoman, 5);
		array_push($groupWoman, 6);
		array_push($groupWoman, 7);
		array_push($groupWoman, 8);
		array_push($groupWoman, 9);
		array_push($groupWoman, 10);
		array_push($groupWoman, 11);
		array_push($groupWoman, 12);
		array_push($groupWoman, 13);
		array_push($groupWoman, 14);
		array_push($groupWoman, 15);

		if ($jenisKelamin == "L")
		{
			return $groupMan;
		}
		else
		{
			return $groupWoman;
		}
	}

	// function setCookieGroup ($cookieName, $cookieValue)
	// {
	// 	$number_of_days = 1 ;
	// 	$date_of_expiry = time() + 60 * 60 * 24 * $number_of_days ;
	// 	setcookie($cookieName, $cookieValue, $date_of_expiry, "/");
	// }
	//
	// function getAllDataGroup ($auth, $arr)
	// {
	// 	$context = otentikasi($auth);
	// 	$arrayGroup = array();
	//
	// 	foreach($arr as $item)
	// 	{
	// 		if ($item != 13)
	// 		{
	// 			$url='https://hack.kurio.co.id/v1/explore/group/' . $item;
	// 			$content=file_get_contents($url,false,$context);
	// 			$json= json_decode($content,true);
	// 			array_push($arrayGroup, $json);
	// 		}
	// 	}
	// 	$jsonGroup = json_encode($arrayGroup);
	// 	setCookieGroup("groupCookie", $jsonGroup);
	// }

	function getGroup ($arr, $auth)
	{
		$context = otentikasi($auth);

		$groupTitle = array();

		foreach($arr as $item)
		{
			if ($item != 13)
			{
				$url='https://hack.kurio.co.id/v1/explore/group/' . $item;
				$content=file_get_contents($url,false,$context);
				$json= json_decode($content,true);

				array_push($groupTitle, $json['name']);
			}
		}

		return $groupTitle;
	}

	function getIdNewsGenderBased ($grup, $auth)
	{
		$context = otentikasi($auth);
		$url='https://hack.kurio.co.id/v1/explore/group/' . $grup;
		$content=file_get_contents($url,false,$context);
		$json= json_decode($content,true);
		$idTopStories = $json['topics']['data'][0]['id'];

		return $idTopStories;
	}

	function getTitleFeed ($grup, $auth, $idBerita)
	{
		$id = getIdNewsGenderBased($grup, $auth);

		$context = otentikasi($auth);
		$url='https://hack.kurio.co.id/v1/feed/topic:' . $id;
		$content=file_get_contents($url,false,$context);
		$json= json_decode($content,true);
		echo $json['data'][$idBerita]['title'];
	}

	function getImageFeed ($grup, $auth, $idBerita)
	{
		$id = getIdNewsGenderBased($grup, $auth);

		$context = otentikasi($auth);
		$url='https://hack.kurio.co.id/v1/feed/topic:' . $id;
		$content=file_get_contents($url,false,$context);
		$json= json_decode($content,true);

		$thumbnail = $json['data'][$idBerita]['thumbnail'];
		if (count($thumbnail) > 0)
		{
			$gambar = $thumbnail['url'];
			echo "<img src=\"" . $gambar . "\">";
		}
	}

	$jenis = "P";
	$auth = "EPOw1awLNdrVPcflSlKhRiWk1KStBaJUOS4ftxLL";
	$dataJenisKelamin = ambilDataCoCe($jenis);
	// getAllDataGroup($auth, $dataJenisKelamin);
	$judulGrup = getGroup($dataJenisKelamin, $auth);

	getTitleFeed($dataJenisKelamin[0], $auth, 2);
	echo "<br>";
	getImageFeed($dataJenisKelamin[0], $auth, 2);
	echo "<br>";

	getTitleFeed($dataJenisKelamin[1], $auth, 2);
	echo "<br>";
	getImageFeed($dataJenisKelamin[1], $auth, 2);
	echo "<br>";

	getTitleFeed($dataJenisKelamin[2], $auth, 2);
	echo "<br>";
	getImageFeed($dataJenisKelamin[2], $auth, 2);
?>
