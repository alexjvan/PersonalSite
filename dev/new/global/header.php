<div id="header">
	<a id="logo" href="<?php echo $prefix?>">
		<img id="logoimg" src="<?php echo $prefix?>static/images/logos/logo2.gif" alt="Logo" />
		<div id="logotext">
			Alex Van Matre
		</div>
	</a>
	<div id="headerlinks">
		<a class="headerlink <?php if($index == 0) echo 'active' ?>" href="<?php echo $prefix ?>">
			Home
		</a>
		<a class="headerlink <?php if($index == 1) echo 'active' ?>" href="<?php echo $prefix ?>about/">
			About
		</a>
		<a class="headerlink <?php if($index == 2) echo 'active' ?>" href="<?php echo $prefix ?>projects/">
			Projects
		</a>
		<a class="headerlink <?php if($index == 3) echo 'active' ?>" href="<?php echo $prefix ?>resume/">
			Resume
		</a>
		<a class="headerlink <?php if($index == 4) echo 'active' ?>" href="<?php echo $prefix ?>contact/">
			Contact
		</a>
	</div>
</div>
<div id="headerblock">
	<!-- INTENTIONALLY EMPTY -->
</div>
