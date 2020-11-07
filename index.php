<?php 

$dir = scandir('challenges');
$no_folder = [".","..","DS_STORE"];

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
			<div class="col header"><h1>Challenge Me</h1></div>
		</div>
		<div class="row">
			<ul>
				<? foreach ($dir as $folder) {
					if (is_dir('challenges/'.$folder) && !in_array($folder, $no_folder)){
						echo '<li><a href="challenges/'.$folder.'">'.ucwords($folder).'</a></li>';
					}
				} ?>
    	</ul>
		</div>
	</div>
</body>
</html>