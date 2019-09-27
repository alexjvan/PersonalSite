<?php $prefix = "" ?>
<!DOCTYPE html>
<html>
	<head>
		<!--
			alexvanmatre
			Author: Alexander J Van Matre

			Current Site Iteration: 2
			Current Site Version: ALPHA
		-->
		<!-- IMPORTS -->
		<!-- FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script:700|Montserrat:400,600" rel="stylesheet">
		<!--EXTERNAL LIBRARIES-->
		<!--JQUERY-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<!--MODERNIZR-->
		<script src="static/modernizr.js" ></script>

		<!-- STYLES -->
		<link href="index.css" rel="stylesheet" type="text/css" />
		<!-- SCRIPTS -->


		<!-- LOGO SETUP -->
		<link id="favicon" href="static/images/logos/logo.gif" rel="icon" type="image/x-icon" />
		<link rel="shortcut icon" href="static/images/logos/logo.gif" >
		<link rel="apple-touch-icon" href="static/images/logos/logo.gif" >

		<!--OPTIMIZATION-->
		<meta http-equiv="Content-Language" contet="en-us" />
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="author" content="Alex Van Matre" />
		<meta name="description" content="Alex Van Matre is a web developer, programmer, and creator from a town near Woodinville, Washington. This is his personal site, a space where he can show off his resume, skills, projects, and host random code." />
		<meta name="robots" content="index, follow" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Alex Van Matre</title>

		<!-- EMERGENCY CSS-->
		<style>
			.disabled {
				display: none!important;
			}
		</style>
	</head>
	<body>
		<div id="content">
			<div id="header">
				<div id="h-back">
					<!--EMPTY-->
				</div>
				<a id="h-logo" href="<?php echo $prefix ?>">
					<img id="h-l-img" src="static/images/logos/logo.gif" />
					<div id="h-l-text">
						Alex Van Matre
					</div>
				</a>
				<div id="h-links">
					<a id='h-l-me' class="h-l-link" href="javascript:void(0)">
						Me
					</a>
					<a id='h-l-code' class="h-l-link" href="javascript:void(0)">
						Code
					</a>
				</div>
			</div>
			<div id="main">
				<div id="main-content">
					<div id="overlay">
						<div id="o-name">
							Alex Van Matre
						</div>
						<div id="o-text">
							Full Stack and Software Developer.
						</div>
					</div>
				</div>
				<div id="contact">
					<div id="contact-items">
						<a id="contact-email" class="contact-item" href="mailto:contact@alexvanmatre.com" target="_blank">
							<img class="contact-img" src="static/images/other-sites/hex/gmail.png" />
						</a>
						<a id="contact-insta" class="contact-item" href="https://www.instagram.com/poke.i.haunt.us/" target="_blank">
							<img class="contact-img" src="static/images/other-sites/hex/instagram.png" />
						</a>
						<a id="contact-twitter" class="contact-item" href="https://twitter.com/alextomator" target="_blank">
							<img class="contact-img" src="static/images/other-sites/hex/twitter.png" />
						</a>
						<a id="contact-github" class="contact-item" href="https://github.com/alexjvan" target="_blank">
							<img class="contact-img" src="static/images/other-sites/hex/github.png" />
						</a>
						<a id="contact-linkedin" class="contact-item" href="https://www.linkedin.com/in/alex-v-147170b5/" target="_blank">
							<img class="contact-img" src="static/images/other-sites/hex/linkedin.png" />
						</a>
					</div>
					<div id="contact-display">

					</div>
				</div>
			</div>
			<div id="me">
				<div id="me-pic" class="me-row">
					<img id="me-img" src="static/images/me/uwMe-square.jpg" alt="me" />
				</div>
				<div id="me-name" class="me-row">
					Alex<sup>ander</sup> Van Matre
				</div>
				<div id="me-title" class="me-row">
					<i>Pro</i> Weirdo
					<br />
					<sup>as well as a</sup> Software Engineer
				</div>
				<div id="me-school" class="me-row">
					<div id="me-uw" class="me-row">
						<div id="me-uw-title" class="me-row">
							University of Washington, Bothell
						</div>
						<div id="me-uw-desc">
							Pursuing a <b>Bachelors of Science in Computer Science and Software Engineering</b> with a <b>Minor in Information Technology</b>.
							<br />
							<i>Planned Graduation Fall, 2020.</i>
						</div>
						<table id="me-uw-table">
							<tr id="me-uw-t-years">
								<td>
									2019
								</td>
								<td colspan="2">
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
								<td colspan="2" class="purple">
									BS CSSE
								</td>
								<td colspan="1" class="gold">
									AI Classes
								</td>
								<td colspan="2" class="purple">
									MS CSSE
								</td>
							</tr>
							<tr>
								<td colspan="1" class="gold">
									IT Minor
								</td>
								<td colspan="2">

								</td>
								<td colspan="3" class="gold">
									MS CSS
								</td>
							</tr>
							<tr class="me-uw-t-end">
								<td colspan="6">

								</td>
							</tr>
						</table>
					</div>
				</div>
				<div id="me-langs" class="me-row">
					<div class="me-lang" data-ten="1">
						<div class="me-lang-title">
							Assembly
						</div>
						<div class="me-lang-desc">
							1/10
						</div>
					</div>
					<div class="me-lang" data-ten="9">
						<div class="me-lang-title">
							C#
						</div>
						<div class="me-lang-desc">
							9/10
						</div>
					</div>
					<div class="me-lang" data-ten="3">
						<div class="me-lang-title">
							C++
						</div>
						<div class="me-lang-desc">
							3/10
						</div>
					</div>
					<div class="me-lang" data-ten="6">
						<div class="me-lang-title">
							CSS
						</div>
						<div class="me-lang-desc">
							6/10
						</div>
					</div>
					<div class="me-lang" data-ten="9">
						<div class="me-lang-title">
							Java
						</div>
						<div class="me-lang-desc">
							9/10
						</div>
					</div>
					<div class="me-lang" data-ten="7">
						<div class="me-lang-title">
							JavaScript
						</div>
						<div class="me-lang-desc">
							7/10
						</div>
					</div>
					<div class="me-lang" data-ten="7">
						<div class="me-lang-title">
							JQuery
						</div>
						<div class="me-lang-desc">
						 	7/10
						</div>
					</div>
					<div class="me-lang" data-ten="6">
						<div class="me-lang-title">
							HTML
						</div>
						<div class="me-lang-desc">
							6/10
						</div>
					</div>
					<div class="me-lang" data-ten="7">
						<div class="me-lang-title">
							PHP
						</div>
						<div class="me-lang-desc">
							7/10
						</div>
					</div>
					<div class="me-lang" data-ten="1">
						<div class="me-lang-title">
							Python
						</div>
						<div class="me-lang-desc">
							1/10
						</div>
					</div>
					<div class="me-lang" data-ten="4">
						<div class="me-lang-title">
							SQL
						</div>
						<div class="me-lang-desc">
							4/10
						</div>
					</div>
				</div>
				<div id="me-job" class="me-row">
					<div id="me-tgt" class="me-row">
						<div id="me-tgt-title" class="me-row">
							Target
						</div>
						<div id="me-tgt-job" class="me-row">
							Guest Advocate <sup>June 2018 to Current</sup>
						</div>
						<div id="me-tgt-desc" class="me-row">
							Working to provide a fun, guest friendly environment while giving efficient and effective services.
							<br />
							Cross trained as cashier, self checkout, guest service, GSTL, hardlines, market, cash office, and Starbucks.
						</div>
					</div>
				</div>
				<div id="me-resume" class="me-row">
					<a id="me-resdown" href="static/files/PublicResume.pdf" download>
						Resume
					</a>
				</div>
			</div>
			<div id="code">
				<!--
					Software
					Live Sites
				-->
				<div class="code-row">
					<div class="code-title">
						Software
					</div>
					<div class="code-item">
						<div class="c-i-title">
							Reneblade
						</div>
						<div class="c-i-desc">
							Reneblade is game, designed in Unity, that I worked on with 4 other people in 12th grade. Here we designed the first level of a 2d platform game, for the Microsoft Hunt the Wumpus Alumni competition.
						</div>
						<a class="c-i-link" href="https://github.com/alexjvan/Wumpus-Alumni-Game" target="_blank">
							Github
						</a>
						<a class="c-i-link" href="static/files/Reneblade.zip" download>
							Download
						</a>
					</div>
					<div class="code-item">
						<div class="c-i-title">
							Minesweeper
						</div>
						<div class="c-i-desc">
							In 10th grade, I developed my own version of the classic game MineSweeper. The code is a bit old, but it still works pretty well.
						</div>
						<a class="c-i-link" href="https://github.com/alexjvan/MineSweeper" target="_blank">
							Github
						</a>
						<a class="c-i-link" href="static/files/MineSweeper.zip" download>
							Download
						</a>
					</div>
				</div>
				<div class="code-row">
					<div class="code-title">
						Live Sites
					</div>
					<div class="code-item">
						<div class="c-i-title">
							Projectzhub
						</div>
						<div class="c-i-desc">
							Projectzhub was a website that I had created, and am currently in the process of actually recreating and making better.
						</div>
						<a class="c-i-link" href="javaScript:void(0)">
							Currently being rewritten.
						</a>
					</div>
					<!--
						projectzhub
						Web crawler demo
					-->
				</div>
				<div class="code-row">
					<div class="code-title">
						Github Repositories
					</div>
					<div id="repos">

					</div>
					<script>
						var repos;
						var colors;
						// GRAB COLORS
						$(document).ready(function() {
							$.getJSON('static/files/colors.json', function(data) {
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
				<script>
					$(document).ready(function() {
						$('.code-item').each(function() {
							if($(this).find('.c-i-link').length == 2) {
								$($(this).find('.c-i-link')[0]).css({'padding-right':'4%','text-align':'right','width':'45%'});
								$($(this).find('.c-i-link')[1]).css({'padding-left':'4%','text-align':'left','width':'45%'});
							}
						});
					});
				</script>
			</div>
		</div>
		<script>
			var isMobile = false;
			if( navigator.userAgent.match(/Android/i)
			 || navigator.userAgent.match(/webOS/i)
			 || navigator.userAgent.match(/iPhone/i)
			 || navigator.userAgent.match(/iPad/i)
			 || navigator.userAgent.match(/iPod/i)
			 || navigator.userAgent.match(/BlackBerry/i)
			 || navigator.userAgent.match(/Windows Phone/i)
			) { isMobile = true; }

			var wasMobile = false;

			$(document).ready(function() {
				sideSizes();
				headerFull();

				$('.contact-item').hover(function() {
					if($(this).is('#contact-email')) {
						$('#contact-display').text('contact@alexvanmatre.com');
					} else if($(this).is('#contact-insta')) {
						$('#contact-display').text('@Poke.I.Haunt.Us');
					} else if($(this).is('#contact-twitter')) {
						$('#contact-display').text('@AlexTomator');
					} else if($(this).is('#contact-github')) {
						$('#contact-display').text('alexjvan');
					} else if($(this).is('#contact-linkedin')) {
						$('#contact-display').text('Alex Van Matre');
					}
				},
				function() {
					$('#contact-display').text('');
				});

				$('.me-lang').each(function() {
					var ten = $(this).data('ten');
					$(this).css({'background':'linear-gradient(90deg, var(--accent) '+ten+'0%, #545454 0%)'});
				});

				$('.h-l-link').hover(function() {
					if(!mobileCheck())
						$(this).stop().animate({'border-width':'4px'}, 100);
				}, function() {
					if(!mobileCheck())
						$(this).stop().animate({'border-width':'0px'}, 100);
				});

				$('#h-l-me').click(function() {
					if($('#me').css('right') == '-17px') {
						shrinkMe();
						$('#contact').stop().animate({'justify-content':'center'});
						$('.h-l-link').stop().animate({'color':'black'});
						$('.h-l-link').promise().done(function() {
							$('.h-l-link').css({'color':'black'});
						});
					} else {
						if($('#code').css('right') == '-17px')
							shrinkCode();
						growMe();
						$('.h-l-link').stop().animate({'color':'white'});
						$('.h-l-link').promise().done(function() {
							$('.h-l-link').css({'color':'white'});
						});
					}
				});

				$('#h-l-code').click(function() {
					if($('#code').css('right') == '-17px') {
						shrinkCode();
						$('.h-l-link').css({'color':'black'});
					} else {
						if($('#me').css('right') == '-17px')
							shrinkMe();
						growCode();
						$('.h-l-link').css({'color':'white'});
					}
				});
			});

			$(window).resize(function() {
				sideSizes();
				headerFull();
			});

			function mobileCheck() {
				if($(window).width() < 800 || isMobile)
					return true;
				return false;
			}

			function sideSizes() {
				if(mobileCheck()) {
					if(!wasMobile) {
						shrinkMe();
						shrinkCode();
						wasMobile = true;
						$('.h-l-link').css({'color':'black'});
					}
				} else {
					if(wasMobile) {
						shrinkMe();
						shrinkCode();
						wasMobile = false;
						$('.h-l-link').css({'color':'black'});
					}
				}
			}

			function headerFull() {
				if(mobileCheck())
					$('#h-l-text').html('AVM');
				else
					$('#h-l-text').html('Alex Van Matre');
			}

			var aboutSize = 0;
			function growMe() {
				$('#me').stop().animate({'right':'-17px'});
				$('#h-back').stop().animate({'right':'-17px'});
			}

			function shrinkMe() {
				$('#me').stop().animate({'right':'-100%'});
				$('#h-back').stop().animate({'right':'-100%'});
			}

			function growCode() {
				$('#code').stop().animate({'right':'-17px'});
				$('#h-back').stop().animate({'right':'-17px'});
			}

			function shrinkCode() {
				$('#code').stop().animate({'right':'-100%'});
				$('#h-back').stop().animate({'right':'-100%'});
			}
		</script>
	</body>
</html>
