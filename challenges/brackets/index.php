<?php
/**
 * Check if a bracket sequence is in the correct order.
 * Example:
 * - "[()()]{}{[()[]]()}" CORRECT
 * - "[({}])" WRONG
 */

$brackets = $_POST["brackets"];
$arr_brackets = str_split($brackets);

$level = 0;
$open_brackets = ["(","[","{"];
$close_brackets = [")","]","}"];

$opens = [];
$response = "";

foreach($arr_brackets as $char){
	if(in_array($char, $open_brackets)){
		$level++;
		array_push($opens, $char);
	}

	if(in_array($char, $close_brackets)){
		if(empty($opens)){
			$response = "WRONG";
			break;
		}
		$pos = array_search($char, $close_brackets);
		if($opens[count($opens)-1] == $open_brackets[$pos]){
			$level--;
			array_pop($opens);
		} else {
			break;
		}
	}
}

if($level != 0){
	$response = "WRONG";
}else{
	$response = "CORRECT";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Challenge ME</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 header"><h3>Brackets</h3></div>
			<div class="col-12">
				Check if a bracket sequence is in the correct order. <br>
 				Example:
 				<ul>
 					<li>"[()()]{}{[()[]]()}" CORRECT</li>
 					<li>"[({}])" WRONG</li>
 				</ul>			
			</div>
		</div>
		<div class="row">
			<form method="POST" action="index.php">
				<div class="form-group">
					<input type="text" class="form-control" name="brackets">
				</div>
				<button type="submit" class="btn btn-primary">SEND</button>
			</form>
		</div>
		<? if (isset($_POST["brackets"])): ?>
			<p><? echo $response; ?></p>
		<? endif ?>
		
	</div>
</body>
</html>


