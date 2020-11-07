<?php
	if(isset($_POST["challenge"])){
		$file = "challenges/challengeList.txt";
		$txt = [
			"challenge" => $_POST["challenge"],
			"twitter" => $_POST["twitter"]
		];
		file_put_contents($file, json_encode($txt)."\r\n", FILE_APPEND);

	}
	header("Location: /");
?>