<?php
	$prefix = "";
	$index = 0;
?>
<!DOCTYPE html>
<html>
	<?php include $prefix."global/head.php" ?>
	<body>
		<?php include $prefix."global/header.php" ?>
		<div id="landing">
			<div id="middle">
				<div id="text">
					<div id="top">
						<span id="hi">Hi</span> I'm
					</div>
					<div id="bottom">
						Alex
					</div>
				</div>
				<div id="picture">
					<img id="pic" src="static/images/me/me-square.jpg" />
				</div>
			</div>
		</div>
		<!--
		<div id="" class="section dark">
			<div class="sectiontitle">
				Title
			</div>
			<div class="sectioncontent">
				<div class="portion text empty">

				</div>
				<div class="portion img empty">

				</div>
				<div class="portion text empty">

				</div>
			</div>
		</div>
		-->
		<div id="about" class="section">
			<div class="sectiontitle">
				Me and My Passions
			</div>
			<div class="sectioncontent">
				<div class="portion img">
					<img src="static/images/me/photo.jpg" />
				</div>
				<div class="portion text">
					Want to get a little bit more personal? Come find out a little more about me and the things that I love! From coffee to travel to video games, find out more about me!
				</div>
				<div class="portion img">
					<img src="static/images/backgrounds/shadow.jpg" />
				</div>
				<a class="action" href="about/">
					About &#x2192;
				</a>
			</div>
		</div>
		<div id="projects" class="section dark">
			<div class="sectiontitle">
				Recent Work
			</div>
			<div class="sectioncontent">
				<div id="projfirst" class="portion list">

				</div>
				<div id="projsecond" class="portion list">

				</div>
				<div id="projthird" class="portion list">

				</div>
				<a class="action" href="projects/">
					Projects &#x2192;
				</a>
			</div>
		</div>
		<div id="resume" class="section">
			<div class="sectiontitle">
				Me in a Page
			</div>
			<div class="sectioncontent">
				<div class="portion img">
					<img src="static/images/me/passport.jpg" />
				</div>
				<div class="portion text">
					I currently an a Software Development Engineer working on a feature team at Expedia Group in the Platform and Marketplaces team. Just before that I graduated the University of Washington, Bothell with a Bachelors of Science in Computer Science and Software Engineering.
				</div>
				<div class="portion text">
					If you want to find out even more about my professional past and the skillsets I have aquired across my 21 years of life, feel free to check out my resume!
				</div>
				<a class="action" href="resume/">
					Resume &#x2192;
				</a>
			</div>
		</div>
		<div id="contact" class="section dark">
			<div class="sectiontitle">
				Let's Talk
			</div>
			<div class="sectioncontent">
				<div class="portion text">
					You can find me in a more professional sense on <a href="https://www.linkedin.com/in/alexvanmatre/" target="_blank">LinkedIn</a> or by <a href="mailto:contact@alexvanmatre.com">email</a>.
				</div>
				<div class="portion text">
					You can take a look at some of the work I do on <a href="https://github.com/alexjvan">Github</a>.
				</div>
				<div class="portion text">
					Or if you'd like you can take a look at some of my more casual stuff on <a href="https://www.instagram.com/poke.i.haunt.us/">Instagram</a>, or on <a href="https://twitter.com/alextomator">Twitter</a>.
				</div>
				<a class="action" href="contact/">
					Contact &#x2192;
				</a>
			</div>
		</div>
		<?php include $prefix.'global/footer.php' ?>
	</body>
</html>

<script>
	var colors = <?php echo file_get_contents('static/files/colors.json') ?>;

	var json = <?php echo file_get_contents('static/files/projects.json') ?>;
	console.log(json);
	// -- Parse through data - grab revisions, languages, and categories
	var revisions = [];
	var languages = [];
	var categories = [];
	// Create revisions index
	json.forEach(function(item, index, array) {
		revisions[item['year']] = [];
	});
	json.forEach(function(item, index, array) {
		var year = item['year'];
		var projects = item['projects'];
		projects.forEach(function(project, pindex, array) {
			// Add revisions
			if(project['revisions'].length != 0) {
				var revs = project['revisions'];
				revs.forEach(function(rev, rindex, array) {
					if(rev['year'] != year) {
						if(revisions[rev['year']] == undefined)
							revisions[rev['year']] = [];
						if(jQuery.inArray(project, revisions[rev['year']]) == -1)
							revisions[rev['year']].push(project);
					}
				}); // End revisions foreach
			}
			// Add languages
			var langs = project['languages'];
			langs.forEach(function(lang, lindex, array) {
				if(jQuery.inArray(lang, languages) == -1)
					languages.push(lang);
			});
			// Add category
			if(jQuery.inArray(project['category'], categories) == -1)
				categories.push(project['category']);
		}); // End projects foreach
	}); // End json foreach
	// -- Sort arrays - languages + categories
	languages.sort();
	categories.sort();
	// -- Create containers
	var i = 0;
	var inprogresscount = 0;
	json.forEach(function(item, index, array){
		// Create title
		var title = "";
		if(i == 0)
			title = "#projfirst";
		else if(i == 1)
			title = "#projsecond";
		else if(i == 2)
			title = "#projthird";
		else
			return;

		var pcount = 0;
		var projects = item['projects'];
		$(title).html($(title).html() + '<div class="pcoltitle">'+item['year']+'</div>');
		projects.forEach(function(project, pindex, array) {
			if(i == 0)
				inprogresscount++;
			else if(pcount == inprogresscount)
				return;

			// -- Create project containers
			var bars = "";
			project['languages'].forEach(function(lang, lindex, array) {
				bars += '<div class="bar '+lang+'" style="background-color: '+colors[lang]+'"><!--EMPTY--></div>'
			});
			$(title).html($(title).html() + '<div class="projectbox"><div class="projectname">'+project['name']+'</div><div class="langbars">'+bars+'</div></div>');

			pcount++;
		});

		i++;
	});
</script>
