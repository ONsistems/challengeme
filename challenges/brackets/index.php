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
$response = "CORRECT";

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
}

$title = " - Brackets";
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<? include "../../header.php" ?>
	<style type="text/css">
		.alert{
			margin-top: 15px;
			font-weight: bold;
		}
		.alert.correct {
			background-color: #00800052;
			color: #008000;
		}
		.alert.wrong {
			background-color: #ff00005c;
			color: #ff0000;
		}
		a {

		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 header"><h3><a href="/"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.5 8.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/></svg></a> Brackets</h3></div>
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
			<div class="col">
				<form method="POST" action="">
					<div class="form-group">
						<input type="text" class="form-control" name="brackets" value="<?= $_POST["brackets"] ?>" placeholder="Enter your bracket sequence">
					</div>
					<button type="submit" class="btn btn-primary">SEND</button>
				</form>
			</div>
		</div>
		<? if (isset($_POST["brackets"])): ?>
			<div class="alert <?= strtolower($response) ?>"><?= $response; ?></div>
		<? endif ?>
		
	</div>
</body>
</html>


