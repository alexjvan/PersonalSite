<?php
	$prefix = "";
	$index = 0;
	$title = "Home";
	$lightfooter = false;
?>
<!DOCTYPE html>
<html>
	<?php include $prefix."global/head.php" ?>
	<body>
		<?php include $prefix."global/header.php" ?>

		<div id="landing">
			<script src="static/scripts/mazeGeneration.js" ></script>
			<div id="map"></div>
			<div id="overlay">
				<div id="name">
					<div id="first">
						Alex
					</div> Van Matre
				</div>
				<div id="title">
					Software Engineer
				</div>
			</div>
		</div>

		<?php include $prefix.'global/footer.php' ?>
	</body>
</html>
