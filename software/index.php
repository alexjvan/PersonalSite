<?php $title = "Software"; $prefix = "../" ?>
<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="index.css" type="text/css" />
	<?php include $prefix."globals/head.php" ?>
	<body>
		<?php include $prefix."globals/header.php" ?>
		<div id="body">
			<div class="comingsoon">
				<div class="title" style="padding-top: 12%;">
					Software
				</div>
				<div class="subtitle">
					Coming soon...
				</div>
				<div class="more">
					<div class="subtitle" style="font-size: 26px; font-weight: bold;">
						While I work on this page, feel free to look at my GitHub repos.
					</div>
					<div id="repos">

					</div>
				</div>
				<script>
					var repos;
					var colors;
					$(document).ready(function() {
						$.getJSON('<?php echo $prefix ?>static/files/colors.json', function(data) {
							colors=data;
							gitRepos(colors);
						});
					});

					function gitRepos(colors) {
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
									$('#repos').html($('#repos').html() + '<div class="repoitem" style="border-color:  '+colors[current['language']]+'"><a class="ri-clickable" href="'+current['svn_url']+'" target="_blank"><div class="ri-c-title">'+current['name']+'</div><div class="ri-c-desc">'+current['description']+'</div><div class="ri-c-lang">'+current['language']+'</div></a></div>');
								}
							}
						};
						xhttp.open("GET", "https://api.github.com/users/alexjvan/repos", true);
						xhttp.send();
					}
				</script>
			</div>
		</div>
		<?php include $prefix."globals/footer.php" ?>
	</body>
</html>
