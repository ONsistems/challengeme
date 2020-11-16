<?php 

$dir = scandir('challenges');
$no_folder = [".","..","DS_STORE", "proba"];


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php include_once "header.php" ?>
	<style type="text/css">
		form{
			border: 1px solid grey;
    		padding: 15px;
		}
		body {
			background-color: grey;
		}
		.bg-image {
			background: url(/assets/img/bg-img.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		.challenge-box{
			height: 290px !important;
			width: 210px !important;
			border-radius: 2pc;
			border: 2px solid;
			margin: 0 5px;
			padding: 15px;
		}
		.header {
			text-align: center;
			font-size: 5vw;
		}
	</style>
</head>
<body class="bg-imag">
	<div class="container">
		<div class="row">
			<div class="col-12 header">Challenge Me</div>
			<div class="col-12">
				<p>Who doesn't like a good challenge? In onsistems we sure love the good challenges. That's why we accept all kind of challenges, that we gather all in this repository All the challenges are wrote in PHP, but we also like JavaScript, or his digievolution, TypeScript. We accept all kind of challenges, you can send us your challenge:</p>
			</div>
		</div>
		<form method="POST" action="challenge.php">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="challenge">Your challenge: </label>
						<textarea name="challenge" class="form-control" id="challenge"></textarea>
					</div>
					<div class="form-group">
						<label for="twitter">Twitter Acount (opcional): </label>
						<input type=text name="twitter" class="form-control" id="twitter"></input>
					</div>
				</div>
				<div class="col-6">
					<button type="submit" class="btn btn-primary">Send Challenge</button>
				</div>
			</div>
		</form>
		
		<hr>
		<div class="row">
			<div class="col-12"><h3>Challenges</h1></div>
			<div class="col-12">
				<ul>
					<?php foreach ($dir as $folder) {
						if (is_dir('challenges/'.$folder) && !in_array($folder, $no_folder)){
							echo '<li><a href="challenges/'.$folder.'">'.ucwords($folder).'</a></li>';
						}
					} ?>
	    		</ul>
			</div>
		</div>
		<div class="challenges">
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
			<div class="challenge-box">your content</div>
		</div>
	</div>
</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.challenges').slick({
				centerMode: true,
				dots:true,
				infinite: true,
				slidesToShow: 4,
				slidesToScroll: 1,
				responsive: [
					{
						breakpoint: 1050,
						settings: {
							slidesToShow: 4,
						}
					},
					{
						breakpoint: 950,
						settings: {
							slidesToShow: 3,
						}
					},
					{
						breakpoint: 750,
						settings: {
							slidesToShow: 1,
						}
					}
				]
			});
		});
	</script>
</html>