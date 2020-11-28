<?php 

$dir = scandir('challenges');
$no_folder = [".","..","DS_STORE","proba"]

?>

<!DOCTYPE html>
<html lang="es">
<?php include_once "header.php" ?>
<body class="bg-imag">
	<div class="container">
		<div class="row">
			<div class="col-12 header">Challenge Me</div>
			<div class="col-12">
				<p>Who doesn't like a good challenge? In onsistems we sure love the good challenges. That's why we accept all kind of challenges, that we gather all in this repository All the challenges are wrote in PHP, but we also like JavaScript, or his digievolution, TypeScript. We accept all kind of challenges, you can send us your challenge:</p>
			</div>
		</div>
		<form method="POST" action="challenge.php">
			<div class="row a-i-center">
				<div class="col-sm-9 col-12">
					<div class="form-group">
						<label for="challenge">Your challenge: </label>
						<textarea name="challenge" class="form-control" id="challenge" rows=5></textarea>
					</div>
					<div class="form-group">
						<label for="twitter">Twitter Acount (opcional): </label>
						<input type=text name="twitter" class="form-control" id="twitter"></input>
					</div>
				</div>
				<div class="col-sm-3 col-12">
					<button type="submit" class="btn btn-primary btn-challenge">Send Challenge</button>
				</div>
			</div>
		</form>
		
		<hr>
		<div class="row">
			<div class="col-12"><h3>Challenges</h1></div>
		</div>
		<div class="challenges">
			<?php foreach ($dir as $folder): ?>
				<?php if (is_dir('challenges/'.$folder) && !in_array($folder, $no_folder)): ?>
					<a href="challenges/<?php echo $folder; ?>">
						<div class="challenge-box">
							<div class="box-img">
								<img src="/challenges/<?php echo $folder; ?>/img.png" width="100%">
							</div>
							<div class="box-tittle"><?php echo ucwords($folder); ?></div>
							<div class="box-code php">PHP</div>
						</div>
					</a>
				<?php endif ?> 
			<?php endforeach ?>
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
				autoplay:false,
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
							autoplay:false,
							dots:false,
							arrows:false,
							slidesToShow: 1,
						}
					}
				]
			});
		});
	</script>
</html>