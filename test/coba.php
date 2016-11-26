<?php
	function ambilDataCoCe($jenisKelamin)
	{
		$groupMan = array();
		array_push($groupMan, 9);
		array_push($groupMan, 15);
		array_push($groupMan, 8);
		array_push($groupMan, 10);
		array_push($groupMan, 1);
		array_push($groupMan, 2);
		array_push($groupMan, 3);
		array_push($groupMan, 4);
		array_push($groupMan, 5);
		array_push($groupMan, 6);
		array_push($groupMan, 7);
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

	function getGroup ($arr, $auth)
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

		foreach($arr as $item)
		{
			if ($item != 13)
			{
				$url='https://hack.kurio.co.id/v1/explore/group/' . $item;
				$content=file_get_contents($url,false,$context);
				$json= json_decode($content,true);

				echo $json['name'];
			}
		}
	}

	$jenis = "L";
	$auth = "EPOw1awLNdrVPcflSlKhRiWk1KStBaJUOS4ftxLL";
	$dataJenisKelamin = ambilDataCoCe($jenis);
	getGroup($dataJenisKelamin, $auth);
?>
