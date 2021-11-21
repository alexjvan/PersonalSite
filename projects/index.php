<?php
	$prefix = "../";
	$index = 2;
?>
<!DOCTYPE html>
<html>
	<?php include $prefix."global/head.php" ?>
	<body>
		<?php include $prefix."global/header.php" ?>
		<div id="warning">
			This page is still under construction, so give it a little mercy :)
		</div>
		<div id="landing">

		</div>
		<div class="sectiontitle">
			My Work
		</div>
		<div id="filtercontainer">
			<div id="languages">

			</div>
			<div id="categories">

			</div>
		</div>
		<div id="projectscontainer">

		</div>
		<div class="sectiontitle" style="background-color: var(--light-primary)">
			My Repositories
		</div>
		<div id="reposcontainer">

		</div>
		<?php include $prefix.'global/footer.php' ?>
	</body>
</html>
<script>
	var colors = <?php echo file_get_contents('../static/files/colors.json') ?>;
	var json = <?php echo file_get_contents('../static/files/projects.json') ?>;

	window.langs = [];
	window.cats = [];

	// Interactions
	$(document).ready(function() {
		loadData();
		$('.filteroption').click(function() { filterClick($(this)) });
	});

	// langs, cats
	var allEnabled = [true, true];

	function filterClick(item) {
		var enabled = !($(item).hasClass('nope'));
		var value = $(item).attr('id');
		if(enabled) {
			// Check if all are enabled already
			var en = true;
			if($(item).parent().attr('id') == "languages") {
				en = allEnabled[0];
				allEnabled[0] = false;
			} else {
				en = allEnabled[1];
				allEnabled[1] = false;
			}
			if(en) {
				console.log($(item).parent().find('.filteroption'));
				$(item).parent().find('.filteroption').each(function() {
					if($(this).attr('id') != $(item).attr('id')) {
						$(this).addClass('nope');
					}
				});
				disableItems();
			} else {
				$(item).addClass('nope');
				disableItems();
			}
		} else {
			// Re-enable filter
			$(item).removeClass('nope');
			$('.projectbox').each(function() {
				if($(this).hasClass(value) && $(this).hasClass('disabled'))
					$(this).removeClass('disabled');
			});
			// Set value
			$(item).parent().each(function() {
				var checkEn = true;
				if($(this).hasClass('nope'))
					checkEn = false;
				if($(this).parent().attr('id') == "languages")
					allEnabled[0] = checkEn;
				else
					allEnabled[1] = checkEn;
			});
		}
	}

	function disableItems() {
		$('.projectbox').each(function() {
			if(!$(this).hasClass('disabled') && shouldDisable($(this)))
				$(this).addClass('disabled');
		});
	}

	function shouldDisable(item) {
		var classes = $(item).attr("class").split(/\s+/);
		var index = classes.indexOf("projectbox");
		var retVal = true;
		if (index > -1)
		  classes.splice(index, 1);
		classes.forEach(function(item, index, array) {
			if(allEnabled[1] == false && window.cats.includes(item)) {
				var options = $("#categories").find('.filteroption');
				for(var i = 0; i < options.length; i++)
					if($(options[i]).attr('id') == item)
						if(!$(options[i]).hasClass('nope'))
							retVal = false;
						else
							break;
			} else if(allEnabled[0] == false && window.langs.includes(item)) {
				var options = $("#languages").find('.filteroption');
				for(var i = 0; i < options.length; i++)
					if($(options[i]).attr('id') == item)
						if(!$(options[i]).hasClass('nope'))
							retVal = false;
						else
							break;
			}
		});
		return retVal;
	}

	function loadData() {
		// -- Parse through data - grab revisions, languages, and categories
		var languages = [];
		var categories = [];
		var revisions = [];
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

		window.langs = languages;
		window.cats = categories;

		// -- Create filters
		// Languages
		languages.forEach(function(lang, lindex, array) {
			$("#languages").html($("#languages").html() + '<div class="filteroption clickable" id="'+lang+'" style="background-color: '+colors[lang]+'">'+lang+'</div>');
		}); // End languages foreach
		// Categories
		categories.forEach(function(cat, cindex, array) {
			$("#categories").html($("#categories").html() + '<div class="filteroption clickable" id="'+cat+'">'+cat+'</div>');
		}); // End categories foreach
		// -- Create containers
		json.forEach(function(item, index, array) {
			var year = item['year'];
			var yearone = year.split(" ")[0];
			var projects = item['projects'];
			// -- Create year containers
			var toWrite = '<div id="year'+yearone+'" class="yearcontainer"><div class="yeartitle">'+year+'</div><div class="projects"></div><div class="revisions">';
			if(revisions[year].length != 0)
				toWrite += '<div class="revisionstitle">The following projects have revisions in this year</div>';
			toWrite += '</div></div>';
			$("#projectscontainer").html($("#projectscontainer").html() + toWrite);
			projects.forEach(function(project, pindex, array) {
				// -- Create project containers
				var bars = "";
				var classname = "projectbox " + project['category'];
				project['languages'].forEach(function(lang, lindex, array) {
					bars += '<div class="bar '+lang+'" style="background-color: '+colors[lang]+'"><!--EMPTY--></div>'
					classname += " " + lang;
				});
				$("#year"+yearone).find('.projects').html($("#year"+yearone).find('.projects').html() + '<div class="'+classname+'">'/*<img class="projectimg" src="../static/images/projects/" />*/+'<div class="projectname">'+project['name']+'</div><div class="projectdescription">'+project['description']+'</div><div class="langbars">'+bars+'</div></div>');
			});
			// Create placeholders
			var count = 5 - projects.length;
			while(count < 0)
				count += 5;
			for(var i = 0; i < count; i++) {
				$("#year"+yearone).find('.projects').html($("#year"+yearone).find('.projects').html() + '<div class="projectplaceholder"></div>');
			}
			// -- Create revision containers
			revisions[year].forEach(function(rev, rindex, array){
				var bars = "";
				rev['languages'].forEach(function(lang, lindex, array) {
					bars += '<div class="bar '+lang+'" style="background-color: '+colors[lang]+'"><!--EMPTY--></div>'
				});
				$("#year"+yearone).find('.revisions').html($("#year"+yearone).find('.revisions').html() + '<div class="revisionbox"><div class="revtitle">'+rev['name']+'</div><div class="langbars">'+bars+'</div></div>');
			});
		}); // End json foreach

		var repos;

		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				repos = JSON.parse(this.responseText);
				for(var i = 0; i < repos.length; i++){
					var current = repos[i];
					// name
					// svn_url
					// description
					// language
					$('#reposcontainer').html($('#reposcontainer').html() + '<div class="repoitem" ><a class="ri-clickable" href="'+current['svn_url']+'" target="_blank" style="border-color:  '+colors[current['language']]+'"><div class="ri-c-title">'+current['name']+'</div><div class="ri-c-desc">'+current['description']+'</div><div class="ri-c-lang">'+current['language']+'</div></a></div>');
				}
			}
		};
		xhttp.open("GET", "https://api.github.com/users/alexjvan/repos", true);
		xhttp.send();
	}
</script>
