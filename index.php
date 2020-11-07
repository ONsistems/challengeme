<?php 

$dir = scandir('challenges');
$no_folder = [".","..","DS_STORE", "proba"];


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<? include_once "header.php" ?>
	<style type="text/css">
		form{
			border: 1px solid grey;
    		padding: 15px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 header"><h1>Challenge Me</h1></div>
			<div class="col-12">
				<p>Who doesn't like a good challenge? In onsistems we sure love the good challenges. That's why we accept all kind of challenges, that we gather all in this repository All the challenges are wrote in PHP, but we also like JavaScript, or his digievolution, TypeScript. We accept all kind of challenges, you can send us your challenge:</p>
			</div>
			<div class="col-6">
				<form method="POST" action="challenge.php">
					<div class="form-group">
						<label for="challenge">Your challenge: </label>
						<textarea name="challenge" class="form-control" id="challenge"></textarea>
					</div>
					<div class="form-group">
						<label for="twitter">Twitter Acount (opcional): </label>
						<input type=text name="twitter" class="form-control" id="twitter"></input>
					</div>
					<button type="submit" class="btn btn-primary">Send Challenge</button>
				</form>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-12"><h3>Challenges</h1></div>
			<div class="col-12">
				<ul>
					<? foreach ($dir as $folder) {
						if (is_dir('challenges/'.$folder) && !in_array($folder, $no_folder)){
							echo '<li><a href="challenges/'.$folder.'">'.ucwords($folder).'</a></li>';
						}
					} ?>
	    		</ul>
			</div>
		</div>
	</div>
</body>
</html>