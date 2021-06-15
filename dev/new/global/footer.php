<div id="footer">
	<div id="footertop">
		<div id="footerleft">
			Alex Van Matre
		</div>
		<div id="footerlinks">
			<a class="footlink" href="<?php echo $prefix?>">Home</a> |
			<a class="footlink" href="<?php echo $prefix?>about/">About</a> |
			<a class="footlink" href="<?php echo $prefix?>projects/">Projects</a> |
			<a class="footlink" href="<?php echo $prefix?>resume/">Resume</a> |
			<a class="footlink" href="<?php echo $prefix?>contact/">Contact</a>
		</div>
	</div>
	<div id="footerkit">
		Let's Keep In Touch
	</div>
	<div id="footersocials">
		<a class="fsocial" href="mailto:contact@alexvanmatre.com" target="_blank">
			<img class="fsocimg" src="<?php echo $prefix?>static/images/other-sites/artsy/gmail.svg" alt="Email" />
		</a>
		<a class="fsocial" href="https://www.linkedin.com/in/alexvanmatre"  target="_blank">
			<img class="fsocimg" src="<?php echo $prefix?>static/images/other-sites/artsy/linkedin.svg" alt="LinkedIn" />
		</a>
		<a class="fsocial" href="https://github.com/alexjvan"  target="_blank">
			<img class="fsocimg" src="<?php echo $prefix?>static/images/other-sites/artsy/github.svg" alt="GitHub" />
		</a>
		<a class="fsocial" href="https://www.instagram.com/poke.i.haunt.us/"  target="_blank">
			<img class="fsocimg" src="<?php echo $prefix?>static/images/other-sites/artsy/instagram.svg" alt="Instagram" />
		</a>
		<a class="fsocial" href="https://twitter.com/alextomator"  target="_blank">
			<img class="fsocimg" src="<?php echo $prefix?>static/images/other-sites/artsy/twitter.svg" alt="Twitter" />
		</a>
	</div>
	<script>
		$('#footersocials').hover(function() {
			$('.fsocial').stop().animate({"background-color":"#b4b4b4"}, 250);
		}, function() {
			$('.fsocial').stop().animate({"background-color":"white"});
		});
		$('.fsocial').hover(function() {
			$(this).stop().animate({"background-color":"white"});
		}, function() {
			$(this).stop().animate({"background-color":"#b4b4b4"}, 250);
		});
	</script>
</div>
