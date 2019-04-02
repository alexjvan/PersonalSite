<?php $title = "Home"; $prefix = "" ?>
<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="index.css" type="text/css" />
	<?php include $prefix."globals/head.php" ?>
	<body>
		<?php include $prefix."globals/header.php" ?>
		<div id="body">
			<div id="landing">
				<div id="l-mtext">
					<div id="l-mt-name">
						Alex Van Matre
					</div>
					<div id="l-mt-slogan">
						01010000 01100101 01100101 01101011 01100001 01100010 01101111 01101111 00100001
					</div>
					<div id="l-mt-translate">
						<button id="l-mt-t-button">Translate</button>
					</div>
					<script>
						var translated = false;
						$(document).ready(function(){
							$('#l-mt-t-button').click(function(){
								if(translated) {
									translated = false;
									$('#l-mt-slogan').fadeOut(function(){
										$('#l-mt-slogan').html('01010000 01100101 01100101 01101011 01100001 01100010 01101111 01101111 00100001');
										$('#l-mt-slogan').fadeIn();
									});
								} else {
									translated = true;
									$('#l-mt-slogan').fadeOut(function(){
										$('#l-mt-slogan').html('Peekaboo<span style="color: #FF5656; text-shadow: 1px 1px black">!</span>');
										$('#l-mt-slogan').fadeIn();
									});
								}
							});
						});
					</script>
				</div>
			</div>
			<div id="about" class="section">
				<div class="section-title">
					About
				</div>
				Come learn a little about me, all you have to do is click
				<a href="<?php echo $prefix ?>about/">Here</a>
			</div>
			<div id="contact" class="section">
				<div class="section-title">
					Contact
				</div>
				If you find it easier, you can contact me through a handy-dandy form found <a href="<?php echo $prefix ?>contact/">Here</a>
			</div>
		</div>
		<?php include $prefix."globals/footer.php" ?>
	</body>
</html>
