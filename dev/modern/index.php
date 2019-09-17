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
		<script src="../../static/modernizr.js" ></script>

		<!-- STYLES -->
		<link href="index.css" rel="stylesheet" type="text/css" />
		<!-- SCRIPTS -->


		<!-- LOGO SETUP -->
		<link id="favicon" href="../../static/images/logos/logo.gif" rel="icon" type="image/x-icon" />
		<link rel="shortcut icon" href="../../static/images/logos/logo.gif" >
		<link rel="apple-touch-icon" href="../../static/images/logos/logo.gif" >

		<!--OPTIMIZATION-->
		<meta http-equiv="Content-Language" contet="en-us" />
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
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
				<a id="h-logo" href="<?php echo $prefix ?>">
					<img id="h-l-img" src="../../static/images/logos/logo.gif" />
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

				</div>
				<div id="contact">
					<div id="contact-items">
						<a id="contact-email" class="contact-item" href="mailto:contact@alexvanmatre.com" target="_blank">
							<img class="contact-img" src="../../static/images/other-sites/hex/gmail.png" />
						</a>
						<a id="contact-insta" class="contact-item" href="https://www.instagram.com/poke.i.haunt.us/" target="_blank">
							<img class="contact-img" src="../../static/images/other-sites/hex/instagram.png" />
						</a>
						<a id="contact-twitter" class="contact-item" href="https://twitter.com/alextomator" target="_blank">
							<img class="contact-img" src="../../static/images/other-sites/hex/twitter.png" />
						</a>
						<a id="contact-github" class="contact-item" href="https://github.com/alexjvan" target="_blank">
							<img class="contact-img" src="../../static/images/other-sites/hex/github.png" />
						</a>
						<a id="contact-linkedin" class="contact-item" href="https://www.linkedin.com/in/alex-v-147170b5/" target="_blank">
							<img class="contact-img" src="../../static/images/other-sites/hex/linkedin.png" />
						</a>
					</div>
					<div id="contact-display">

					</div>
				</div>
			</div>
			<div id="me">
				<div id="me-pic" class="me-row">
					<img id="me-img" src="../../static/images/me/uwMe-square.jpg" alt="me" />
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
									Classes for Fun
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
				<div id="me-resume" class="me-row">
					<a id="me-resdown" href="../../static/files/PublicResume.pdf" download>
						Resume
					</a>
				</div>
			</div>
			<div id="code">
				<!--
					Software
					Live Sites
				-->
				<div class="code-col">
					<div class="code-title">
						Software
					</div>
					<!--
						Reneblade
						Minesweeper
					-->
				</div>
				<div class="code-col">
					<div class="code-title">
						Live Sites
					</div>
					<!--
						projectzhub
					-->
				</div>
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
				mobileContact();
				meSize();
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
					$(this).stop().animate({'border-width':'4px'}, 100);
				}, function() {
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
				mobileContact();
				meSize();
			});

			function mobileCheck() {
				if($(window).width() < 800 || isMobile)
					return true;
				return false;
			}

			function meSize() {
				if(mobileCheck()) {
					if(!wasMobile) {
						shrinkMe();
						shrinkCode();
						wasMobile = true;
						$('.h-l-link').css({'color':'black'});
						$('#me').css({'width':'calc(100% - 100px)','right':'-100%'});
						$('.me-row').css({'padding':'0px','width':'100%'});
						$('#me-img').css({'border-radius':'75px', 'height':'75px'});
						$('#me-name').css({'font-size':'18px'});
						$('#me-title').css({'font-size':'14px'});
						$('#me-about').css({'display':'inline-block'});
						$('#me-job').css({'font-size':'16px', 'width':'100%'});
						$("#me-tgt").css({'font-size':'12px', 'margin':'5px', 'padding':'10px', 'width':'calc(100% - 30px)'});
						$("#me-tgt-title").css({'font-size':'14px'});
						$('#me-school').css({'font-size':'16px', 'width':'100%'});
						$("#me-uw").css({'font-size':'12px', 'margin':'5px', 'padding':'10px', 'width':'calc(100% - 30px)'});
						$("#me-uw-title").css({'font-size':'14px'});
						$('.me-lang').css({'margin':'3px','padding':'3px 10px'});
						$('.me-lang-title').css({'font-size':'14px'});
						$('.me-lang-desc').css({'font-size':'12px'});
						$('#me-resdown').css({'font-size':'14px'});
					}
				} else {
					if(wasMobile) {
						shrinkMe();
						shrinkCode();
						wasMobile = false;
						$('.h-l-link').css({'color':'black'});
						$('#me').css({'width':'60%','right':'-60%'})
						$('.me-row').css({'padding':'5px 10px','width':'calc(100% - 20px)'});
						$('#me-img').css({'border-radius':'100px', 'height':'100px'});
						$('#me-name').css({'font-size':'20px'});
						$('#me-title').css({'font-size':'16px'});
						$('#me-about').css({'display':'flex'});
						$('#me-job').css({'font-size':'18px', 'width':'50%'});
						$("#me-tgt").css({'font-size':'14px', 'margin':'10px', 'padding':'15px', 'width':'calc(100% - 50px)'});
						$("#me-tgt-title").css({'font-size':'16px'});
						$('#me-school').css({'font-size':'18px', 'width':'50%'});
						$("#me-uw").css({'font-size':'14px', 'margin':'10px', 'padding':'15px', 'width':'calc(100% - 50px)'});
						$("#me-uw-title").css({'font-size':'16px'});
						$('.me-lang').css({'margin':'5px','padding':'5px 15px'});
						$('.me-lang-title').css({'font-size':'16px'});
						$('.me-lang-desc').css({'font-size':'14px'});
						$('#me-resdown').css({'font-size':'16px'});
					}
				}
			}

			function headerFull() {
				if(isMobile) {
					$('#h-l-text').html('AVM');
				}
				else {
					$('#h-l-text').html('AVM');
				}
			}

			function mobileContact() {
				if($(window).width() < 700 || isMobile) {
					$('#contact-display').css({'display':'none'});
					$('.contact-img').css({'height':'60px','padding':'10px 5px'});
				} else {
					$('#contact-display').css({'display':'flex'});
					$('.contact-img').css({'height':'70px','padding':'5px'});
				}
			}

			var aboutSize = 0;
			function growMe() {
				$('#me').stop().animate({'right':'-17px'});
			}

			function shrinkMe() {
				if(mobileCheck())
					$('#me').stop().animate({'right':'-100%'});
				else
					$('#me').stop().animate({'right':'-60%'});
			}

			function growCode() {
				$('#code').stop().animate({'right':'-17px'});
			}

			function shrinkCode() {
				if(mobileCheck())
					$('#code').stop().animate({'right':'-100%'});
				else
					$('#code').stop().animate({'right':'-60%'});
			}
		</script>
	</body>
</html>
