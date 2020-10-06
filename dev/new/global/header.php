<div id="header">
	<a id="logo" href="<?php echo $prefix?>">
		<img id="logoimg" src="<?php echo $prefix?>static/images/logos/logo2.gif" alt="Logo" />
		<div id="logotext">
			Alex Van Matre
		</div>
	</a>
	<div id="headerlinks">
		<a class="headerlink" href="<?php echo $prefix ?>">
			Home
		</a>
		<a class="headerlink" href="<?php echo $prefix ?>about/">
			About
		</a>
		<a class="headerlink" href="<?php echo $prefix ?>toolbox/">
			Toolbox
		</a>
		<a class="headerlink" href="<?php echo $prefix ?>projects/">
			Projects
		</a>
		<a class="headerlink" href="<?php echo $prefix ?>contact/">
			Contacts
		</a>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('.headerlink').hover(
		// Hover
		function() {
			$(this).stop().animate({'margin-top':'20px', 'margin-bottom':'28px', 'top':'-5px', 'border-bottom-width':'5px'}, 200, function() {
				$(this).stop().animate({'margin-top':'25px','margin-bottom':'18px','top':'0px'}, 200);
			});
		},
		// Unhover
		function() {
			$(this).stop().animate({'margin-top':'25px','margin-bottom':'23px','top':'0px', 'border-width':'0px'}, 100);
		});
	});
</script>
