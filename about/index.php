<?php $title = "About"; $prefix = "../" ?>
<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="index.css" type="text/css" />
	<?php include $prefix."globals/head.php" ?>
	<body>
		<?php include $prefix."globals/header.php" ?>
		<style>
			.h-r-d-i-l-text {
				color: white;
			}
		</style>
		<div id="body">
			<div id="header">
				<div id="title">
					About
				</div>
			</div>
			<div class="seperator">

			</div>
			<div id="start" class="section">
				<div class="sectiontitle white">
					Who am I?
				</div>
				Here you can find out all about me, conveniently categorized into sections that I feel best represent me.
			</div>
			<div id="me" class="section">
				<div class="sectiontitle black">
					I am Me.
				</div>
				<div id="m-photo">
					<img id="m-p-img" src="<?php echo $prefix ?>static/images/me/uwMe-square.jpg" alt="me" />
					<div id="m-p-name">
						Alex Van Matre
					</div>
				</div>
				<div id="m-desc">
					That amazing person right there? Yup, thats me. I would definitely say I am weird with a mix of nerd and happy. I love coding, my amazing job at Target, and all the people surrounding me. Here you can learn all about the weird parts that allegedly make up me. A few random facts about me: I have Type 1 Diabetes, and have had it since I was two and a half. From this, I was able to work on the gingerbread houses that are on display in the downtown Seattle Sheraton. I have an average typing speed of 83wpm, with my max timing being 114wpm. Also, I sort of play 3 instruments! The coolest fact about me is that I have a Target branded paw patrol shirt. So, you know, I am pretty epic.
				</div>
			</div>
			<div id="student" class="section">
				<div class="sectiontitle white">
					I am a Student.
				</div>
				<div id="s-uw">
					<img id="s-uw-img" src="<?php echo $prefix ?>static/images/other-sites/uw-gold.png" alt="uw" />
				</div>
				<div id="s-talk">
					I am currently a <i>Junior</i> at the University of Washington, Bothell. I am enrolled in the computer science program. My current plan is to get a minor in <b>Information Technology</b>, a Major in <b>Computer Science and Software Engineering (BS CSSE)</b>, and then a Dual Masters in <b>Cyber Security Systems (MS CSS)</b> and <b>Computer Science and Software Engineering (MS CSSE)</b>.
				</div>
				<div id="s-display">
					<table id="s-d-table">
						<tr id="s-d-t-years">
							<td colspan="2">
								2018
							</td>
							<td>
								2019
							</td>
							<td>
								2020
							</td>
							<td>
								2021
							</td>
							<td>
								2022
							</td>
							<td>
								2023
							</td>
						</tr>
						<tr>
							<td rowspan="2" colspan="1" class="blue">
								Pre major
							</td>
							<td colspan="3" class="purple">
								BS CSSE
							</td>
							<td colspan="2" class="gold">
								MS CSSE
							</td>
						</tr>
						<tr>
							<td colspan="2" class="gold">
								IT Minor
							</td>
							<td>

							</td>
							<td colspan="3" class="purple">
								MS CSS
							</td>
						</tr>
						<tr class="s-d-t-end">
							<td colspan="7">

							</td>
						</tr>
					</table>
				</div>
			</div>
			<div id="coder" class="section">
				<div class="sectiontitle black">
					I am a Developer.
				</div>
				<div id="c-description">
					<div id="c-d-talk">
						Development is my life, since the 6th grade. I started by learning about Java through Minecraft, and took a simple class to learn the basics. For the seven years since that summer, I have continued to expand and test my knowledge with different languages, projects, and projects to keep me entertained.
						<br />
						<br />
						If you want to see all about what I have done, head over to my software page, or look below at some of my repos.
						<br />
					</div>
					<div id="c-d-button">
						<a href="<?php echo $prefix ?>/software/">Software</a>
					</div>
				</div>
				<div id="c-repos">

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
									$('#c-repos').html($('#c-repos').html() + '<div class="repoitem" style="border-color:  '+colors[current['language']]+'"><a class="ri-clickable" href="'+current['svn_url']+'" target="_blank"><div class="ri-c-title">'+current['name']+'</div><div class="ri-c-desc">'+current['description']+'</div><div class="ri-c-lang">'+current['language']+'</div></a></div>');
								}
							}
						};
						xhttp.open("GET", "https://api.github.com/users/alexjvan/repos", true);
						xhttp.send();
					}
				</script>
			</div>
			<div id="languages" class="section">
				<div id="l-talk">
					Here is a list of the language I know, and how well I know them. For more information, just click on the language.
				</div>
				<div id="l-languages">
					<div class="language" data-fill="100">
						<div class="l-front">
							<div class="l-f-title">
								C#
							</div>
							<div class="l-f-bar">
								<div class="l-f-b-bar">

								</div>
							</div>
						</div>
						<div class="l-description disabled">
							I first used C# in 10th grade for my C# class. With that instructor I went a full two years learning the true ways of programming, moving fully away from self taught practices. I have also taken another algorithms class that was taught in C#. I have made a programming language, a game, and many of my main projects in C#, making it my preferred and main language.
						</div>
					</div>
					<div class="language" data-fill="90">
						<div class="l-front">
							<div class="l-f-title">
								HTML
							</div>
							<div class="l-f-bar">
								<div class="l-f-b-bar">

								</div>
							</div>
						</div>
						<div class="l-description disabled">
							I took a web design class in 10th grade, where I learned the basics of HTML and CSS. The class was rather basic, and didn't stretch beyond what I had experimented with through Googling about basic web design.
						</div>
					</div>
					<div class="language" data-fill="80">
						<div class="l-front">
							<div class="l-f-title">
								CSS
							</div>
							<div class="l-f-bar">
								<div class="l-f-b-bar">

								</div>
							</div>
						</div>
						<div class="l-description disabled">
							I took a web design class in 10th grade, where I learned the basics of HTML and CSS. The class was rather basic, and didn't stretch beyond what I had experimented with through Googling about basic web design.
						</div>
					</div>
					<div class="language" data-fill="80">
						<div class="l-front">
							<div class="l-f-title">
								PHP
							</div>
							<div class="l-f-bar">
								<div class="l-f-b-bar">

								</div>
							</div>
						</div>
						<div class="l-description disabled">
							Wanting to work with databases, as is the next logical step after web design and scripting, I did research and learned about PHP. In 11th grade I very quickly fell in love with the programming language that was more like the C# I was used to, as well as the simplicity of formatting that it brought. Many of my projects that I have made before I learned about AJAX, like projectzhub.com, were made purely in PHP.
						</div>
					</div>
					<div class="language" data-fill="70">
						<div class="l-front">
							<div class="l-f-title">
								JQuery
							</div>
							<div class="l-f-bar">
								<div class="l-f-b-bar">

								</div>
							</div>
						</div>
						<div class="l-description disabled">
							After frustrations that grew pretty quickly with JavaScript, I did research and found out about the popularity of JQuery. Here is where I continued to expand with my knowledge of web scripting. In my 12th grade JavaScript class, they covered JQuery in a good depth.
						</div>
					</div>
					<div class="language" data-fill="60">
						<div class="l-front">
							<div class="l-f-title">
								JavaScript
							</div>
							<div class="l-f-bar">
								<div class="l-f-b-bar">

								</div>
							</div>
						</div>
						<div class="l-description disabled">
							After the Web Design class I took in 10th grade I learned about JavaScripts importance in the web trio. I quickly picked it up and it became what got me so in depth with websites. A couple years later, in 12th grade, I agreed to take another basic JavaScript class with a friend where I 'officially' learned JavaScript.
						</div>
					</div>
					<div class="language" data-fill="50">
						<div class="l-front">
							<div class="l-f-title">
								C++
							</div>
							<div class="l-f-bar">
								<div class="l-f-b-bar">

								</div>
							</div>
						</div>
						<div class="l-description disabled">
							The summer after my Java Class (7th grade), I took a C++ class through the same instructors! I had messed around with C++ but didn't like it very much due to it's lower level of structure. I have recently gotten back into it for my Data Structures and Algorithms classes.
						</div>
					</div>
					<div class="language" data-fill="40">
						<div class="l-front">
							<div class="l-f-title">
								Spanish
							</div>
							<div class="l-f-bar">
								<div class="l-f-b-bar">

								</div>
							</div>
						</div>
						<div class="l-description disabled">
							I have taken a full three years of high school Spanish. Some remains of what was tought in the class has stuck with me, other parts have not.
						</div>
					</div>
					<div class="language" data-fill="40">
						<div class="l-front">
							<div class="l-f-title">
								SQL
							</div>
							<div class="l-f-bar">
								<div class="l-f-b-bar">

								</div>
							</div>
						</div>
						<div class="l-description disabled">
							I first worked with SQL when making my project management site, projectzhub.com, that is no longer active. I used it to create and manage users and their different tasks and projects. I used it a little more on a prototype stat tracker for a Unity game that ended up not being used.
						</div>
					</div>
					<div class="language" data-fill="30">
						<div class="l-front">
							<div class="l-f-title">
								Java
							</div>
							<div class="l-f-bar">
								<div class="l-f-b-bar">

								</div>
							</div>
						</div>
						<div class="l-description disabled">
							Java was the first language I had learned. I took a summer course back in 6th grade to learn the basics. After that, I expiremented around with Minecraft's Server API - Bukkit. Here is where I really learned to code and expirement with the higher levels of programming.
						</div>
					</div>
					<div class="language" data-fill="20">
						<div class="l-front">
							<div class="l-f-title">
								Python
							</div>
							<div class="l-f-bar">
								<div class="l-f-b-bar">

								</div>
							</div>
						</div>
						<div class="l-description disabled">
							About two years ago I heard about the popularity of Python, especially within artificial intelligence, and was immediately interested. I learned how to program with it, got a raspberry pi, worked on a couple projects, and gave up with the language. Not a big fan of the language, but to be fair I have not given it much time.
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function() {
						// FILL BARS
						$('.language').each(function() {
							var fill = $(this).data('fill');
							$(this).find('.l-f-b-bar').stop().animate({'width':fill+"%"});
						});
						// LANGAUGE CLICK
						$('.l-front').click(function() {
							if($(this).parent().find('.l-description').hasClass('disabled')) {
								$(this).parent().find('.l-description').removeClass('disabled');
							} else {
								$(this).parent().find('.l-description').addClass('disabled');
							}
						});
					});
				</script>
			</div>
			<div id="target" class="section">
				<div class="sectiontitle black">
					I am a Two Minute Best Friend.
				</div>
				<div id="t-desc">
					<div id="t-d-pic">
						<img src="<?php echo $prefix ?>static/images/other-sites/target.png" alt="target" />
					</div>
					<div id="t-d-talk">
						I work over at the Woodinville, Washington Target! I work with so many amazing people, and guests that it is truly one of my favorite parts of my life. I am severely lucky to have such an amazing team and job, especially being in retail.
					</div>
				</div>
				<div id="t-locations">
					I am trained in lots of locations, most of them being in the front of the store. My absolute favorite is <b>Guest Service</b>. You can usually find me over there if you are looking for me. My second favorite is <b>GSA</b> (the front end manager). I have only taken the position a couple times when they run into scheduling issues, but I love it none the less. My third favorite is <b>Starbucks</b>. However, I am only over there when they run into a scheduling issue. Coming in fourth is <b>Self Checkout</b>, but I am rarely over there. Then it comes to <b>Hardlines</b>, which isn't too bad but it's not where I was hired so they don't have me there a lot. Coming close in last in <b>Cashier</b> (which is actually where I was hired for). Overall I love all the different positions, and the team that comes with all of them.
				</div>
				<script>
					$(document).ready(function() {
						change();
					});
					$(window).resize(function() {
						change();
					});
					function change() {
						if($(window).width() < 750) {
							$('#t-desc').css({'width':'98%'});
							$('#t-locations').css({'width':'98%'});
						} else {
							$('#t-desc').css({'width':'38%'});
							$('#t-locations').css({'width':'58%'});
						}
					}
				</script>
			</div>
			<div id="gamer" class="section">
				<div class="sectiontitle white">
					I am a Gamer.
				</div>
				<div style="color: white;">
					Most importantly, I enjoy games. Feel free to add me on Steam @<b>Tony</b>, or on XBOX @<b>AddyRawr</b>. I tend to play games more for fun instead of seriously. But hey, give me a shot.
					<br />
					I always enjoying some Payday 2, CSGO, or R6 Siege. However, I do have a pretty wide collection of games if you are looking for something else.
				</div>
			</div>
			<div id="resume" class="section">
				<div class="sectiontitle black">
					Resume.
				</div>
				Here you can download a copy of my resume, if you wish to take a further look into my professional side. <br />
				<a href="<?php echo $prefix ?>static/files/PublicResume.pdf" download>Download</a>
			</div>
		</div>
		<?php include $prefix."globals/footer.php" ?>
	</body>
</html>
