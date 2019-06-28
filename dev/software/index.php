<?php $title = "Software"; $prefix = "../../" ?>
<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="index.css" type="text/css" />
	<?php include $prefix."globals/head.php" ?>
	<body>
		<?php include $prefix."globals/header.php" ?>
		<div id="body">
			<div id="header">
				<div id="title">
					Software
				</div>
			</div>
			<div class="seperator">

			</div>
			<div id="projectscontainer">
				<div id="pleft">
					<div class="projectstitle" style="color: #343434">
						Software
					</div>
					<div class="projectsheader">
						Here are a list of projects I have worked on, that don't directly relate to online projects.
					</div>
					<div id="softwareprojects">
						<div class="project">
							<div class="p-img">
								<img class="p-i-img" src="" alt="" />
							</div>
							<div class="p-info">
								<div class="p-i-title">
									Reneblade
								</div>
								<div class="p-i-desc">
									A game I made with 5 other people for Microsoft's Hunt The Wumpus Alumni Competition.
								</div>
								<div class="p-i-links">
									<a class="p-i-l-link" href="">Download</a>
									<a class="p-i-l-link" href="">GitHub</a>
								</div>
							</div>
						</div>
						<div class="project">
							<div class="p-img">
								<img class="p-i-img" src="" alt="" />
							</div>
							<div class="p-info">
								<div class="p-i-title">
									MineSweeper
								</div>
								<div class="p-i-desc">
									A custom rendition of the classic game MineSweeper that I made in C#.
								</div>
								<div class="p-i-links">
									<a class="p-i-l-link" href="">Download</a>
									<a class="p-i-l-link" href="">GitHub</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="pright">
					<div class="projectstitle" style="color: #e4e4e4">
						Web
					</div>
					<div class="projectsheader" style="color: #e4e4e4">
						You can also head over to my <a style="color: #e4e4e4; text-decoration: underline; display: inline-block" href="<?php echo $prefix ?>/dev/playground/">playground</a>, to view live demos of current and previous projects.
					</div>
					<div id="webprojects">

					</div>
				</div>
			</div>
			<div id="repo">
				<div id="rtitle">
					Here is a full list of my github repos, if you want to give that a look.
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
		<?php include $prefix."globals/footer.php" ?>
	</body>
</html>
