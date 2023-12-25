<?php
	$prefix = "../";
	$index = 2;
	$title = "Projects";
	$lightfooter = false;
?>
<!DOCTYPE html>
<html>
	<?php include $prefix."global/head.php" ?>
	<body>
		<?php include $prefix."global/header.php" ?>

		<!-- <div id="current" class="projectssection">
			<div class="projectstitle">
				Current
			</div>
		</div>
		<div id="featured" class="projectssection">
			<div class="projectstitle">
				Featured
			</div>
		</div> -->
		<div id="github" class="projectssection">
			<div class="projectstitle">
				Github Repos
			</div>
			<div id="repocontainer" class="projectscontainer">
				<script>
					var colors = <?php echo file_get_contents('../static/files/colors.json') ?>;

					var repoCount = 0;
					var repoData = [];
					var creating = false;

					function loadData() {
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
								var repos = JSON.parse(this.responseText);

								repoCount = repos.length;

								for(var i = 0; i < repoCount; i++){
									grabLanguages(repos[i]);
								}
							}
						};
						xhttp.open("GET", "https://api.github.com/users/alexjvan/repos", true);
						xhttp.send();
					}

					function grabLanguages(content) {
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
								var languages = JSON.parse(this.responseText);

								repoData.push(new RepoData(content, languages));

								if(repoData.length == repoCount && !creating) {
									createRepoContent();
								}
							}
						};
						xhttp.open("GET", content['languages_url'], true);
						xhttp.send();
					}

					function createRepoContent() {
						creating = true;
						var sorted = repoData.sort(
						  function(a, b) {
						    if (a.data.name.toLowerCase() < b.data.name.toLowerCase()) return -1;
						    if (a.data.name.toLowerCase() > b.data.name.toLowerCase()) return 1;
						    return 0;
						  }
						);

						for(var i = 0; i < repoData.length; i++) {
							var current = repoData[i];

							var topLanguage = '';
							var topLCount = 0;

							var gcf = getGCF(Object.values(current.languages));

							var repoBars = '';
							for(const [key, value] of Object.entries(current.languages)) {
								if(value > topLCount) {
									topLCount = value;
									topLanguage = key;
								}

								var factor = value / gcf;
								repoBars += '<div class="repobar projectbar" style="background-color:'+colors[key]+'; flex:'+factor+'"></div>';
							}

							var useLanguage = current.data['language'];
							if(useLanguage == null) {
								useLanguage = topLanguage;
							}

							var item = '<a class="repoitem projectitem" href="' + current.data['svn_url'] + '" target="_blank"><div class="repotitle projecttitle">' + current.data['name'] + '</div><div class="repodesc projectdesc">' + current.data['description'] + '</div><div class="repoprimarylang projectprimarylang">' + useLanguage + '</div><div class="repolangbars projectlangbars">' + repoBars + '</div></a>';

							$("#repocontainer").append(item);
						}
					}

					function getGCF(array)
					{
					    var result = array[0];
					    for (var i = 1; i < array.length; i++)
					    {
					        result = gcf(array[i], result);

					        if(result == 1)
					        	return result;
					    }
					    return result;
					}

					function gcf(a, b)
					{
					    if (a == 0)
					        return b;
					    return gcf(b % a, a);
					}


					function RepoData(data, languages) {
						this.data = data,
						this.languages = languages
					}

					loadData();
				</script>
			</div>
		</div>

		<?php include $prefix.'global/footer.php' ?>
	</body>
</html>
