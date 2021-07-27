<?php
	$prefix = "../";
	$index = 2;
?>
<!DOCTYPE html>
<html>
	<?php include $prefix."global/head.php" ?>
	<body>
		<?php include $prefix."global/header.php" ?>
		<div id="landing">

		</div>
		<?php
			/*
			// Load in file
			$file = file_get_contents('../static/files/projects.json');
			$json = json_decode($file, true);

			$years = array();
			$revisions = array();
			$languages = array();
			$categories = array();

			// Parse through data
			foreach($json as $project) {
				// Add project to year
				if(!array_key_exists($project["year"], $years))
					$years[$project["year"]] = array();
				array_push($years[$project["year"]], $project);
				// Add revisions to year
				if(!empty($project["revisions"])) {
					foreach($project["revisions"] as $revision) {
						if($revision["year"]!=$project["year"]) {
							if(!array_key_exists($revision["year"], $revisions))
								$revisions[$revision["year"]] = array();
							if(!in_array($project, $revisions[$revision["year"]]))
								array_push($revisions[$revision["year"]], $project);
						}
					}
				}
				// Add languages to languages option
				foreach($project["languages"] as $language) {
					if(!in_array($language, $languages))
						array_push($languages, $language);
				}
				// Add category to category options
				if(!in_array($project["category"], $categories))
					array_push($categories, $project["category"]);
			}
			// Sort arrays
			//krsort($years);
			//krsort($revisions);
			asort($languages);
			asort($categories);
			// Array of filter types and filter options
			// Create year containers - IN PROGRESS WILL ALWAYS BE LAST
			// Create project containers
			// Create revision containers


			// Load repos
			*/
		?>
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
	// -- Create filters
	// Languages
	languages.forEach(function(lang, lindex, array) {
		$("#languages").html($("#languages").html() + '<div class="filteroption clickable" id="'+lang+'" style="border-color: '+colors[lang]+'">'+lang+'</div>');
	}); // End languages foreach
	// Categories
	categories.forEach(function(cat, cindex, array) {
		$("#categories").html($("#categories").html() + '<div class="filteroption clickable">'+cat+'</div>');
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
			project['languages'].forEach(function(lang, lindex, array) {
				bars += '<div class="bar '+lang+'" style="background-color: '+colors[lang]+'"><!--EMPTY--></div>'
			});
			$("#year"+yearone).find('.projects').html($("#year"+yearone).find('.projects').html() + '<div class="projectbox"><img class="projectimg" src="../static/images/projects/" /><div class="projectname">'+project['name']+'</div><div class="projectdescription">'+project['description']+'</div><div class="langbars">'+bars+'</div></div>');
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
	// -- Load repos - TODO EDIT
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
				$('#reposcontainer').html($('#reposcontainer').html() + '<div class="repoitem" style="border-color:  '+colors[current['language']]+'"><a class="ri-clickable" href="'+current['svn_url']+'" target="_blank"><div class="ri-c-title">'+current['name']+'</div><div class="ri-c-desc">'+current['description']+'</div><div class="ri-c-lang">'+current['language']+'</div></a></div>');
			}
		}
	};
	xhttp.open("GET", "https://api.github.com/users/alexjvan/repos", true);
	xhttp.send();
</script>
