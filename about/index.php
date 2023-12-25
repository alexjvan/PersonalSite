<?php
	$prefix = "../";
	$index = 1;
	$title = "About";
	$lightfooter = false;
?>
<!DOCTYPE html>
<html>
	<?php include $prefix."global/head.php" ?>
	<body>
		<?php include $prefix."global/header.php" ?>

		<div id="bodycontainer">
			<div id="me">
				<img id="face" alt="me" src="../static/images/me/alex_face.gif" />
			</div>
			<div id="scroller">
				<p style="font-size: 24px; font-weight: bold;">
					Hi, I'm Alex.
				</p>
				<p>
					I am a software engineer born and raised in the greater Seattle area.
				</p>
				<p>
					When I am not coding, I enjoy longboarding, board and video games, mythology, and just being outside in general.
				</p>
				<p>
					Feel free to connect with me at any of the links at the bottom of the page!
				</p>
				<div id="timeline">
					<div id="timelinetitle">
						Timeline
					</div>
					<div id="timelinecontainer">
						<div class="steps">
							<div class="stepscontainer">
								<div class="content">
									<h2>Software Development Engineer 2, Expedia Group</h2>
									<p>Promoted from a SDE1 to SDE2 at Expedia Group.</p>
								</div>
								<i class="stepline"></i>
								<div class="date">Aug 2022</div>
							</div>
							<div class="stepscontainer">
								<div class="content">
									<h2>Software Development Engineer 1, Expedia Group</h2>
									<p>Started at Expedia Group as a new grad working in the lodging pricing space.</p>
								</div>
								<i class="stepline"></i>
								<div class="date">Aug 2021</div>
							</div>
							<div class="stepscontainer">
								<div class="content">
									<h2>B.S. Computer Science and Software Engineering</h2>
									<p>Graduated with a bachelors of science in computer science and software engineering from the University of Washington, Bothell.</p>
								</div>
								<i class="stepline"></i>
								<div class="date">June 2021</div>
							</div>
							<div class="stepscontainer">
								<div class="content">
									<h2>Started at University of Washington, Bothell</h2>
									<p>Directed admitted from high school into the computer science school at the University of Washington, Bothell.</p>
								</div>
								<i class="stepline"></i>
								<div class="date">Sep 2018</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include $prefix.'global/footer.php' ?>
	</body>
</html>
