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
				</div>
				<div id="me-about" class="me-row">
					<div id="me-school">
						<div class="about-title">
							School
						</div>
						<div id="me-uw" class="me-row">
							<div id="me-uw-title" class="me-row">
								University of Washington, Bothell
							</div>
							<div id="me-uw-desc">
								Pursuing a <b>Minor in Information Technology</b> and a <b>Bachelors in Computer Science and Software Engineering</b>.
							</div>
						</div>
					</div>
					<div id="me-job">
						<div class="about-title">
							Job
						</div>
						<div id="me-tgt" class="me-row">
							<div id="me-tgt-title" class="me-row">
								Target - Guest Advocate
							</div>
							<div id="me-tgt-desc">
								Cross trained as cashier, self checkout, guest service, GSA, hardlines, market, cash office, and Starbucks.
							</div>
						</div>
					</div>
				</div>
				<div id="me-langs" class="me-row">
					<div class="me-lang" data-ten="6">
						<div class="me-lang-title">
							CSS
						</div>
						<div class="me-lang-desc">
							6 years
						</div>
					</div>
					<div class="me-lang" data-ten="9">
						<div class="me-lang-title">
							C#
						</div>
						<div class="me-lang-desc">
							4 years
						</div>
					</div>
					<div class="me-lang" data-ten="3">
						<div class="me-lang-title">
							C++
						</div>
						<div class="me-lang-desc">
							1 years
						</div>
					</div>
					<div class="me-lang" data-ten="9">
						<div class="me-lang-title">
							Java
						</div>
						<div class="me-lang-desc">
							8 years
						</div>
					</div>
					<div class="me-lang" data-ten="7">
						<div class="me-lang-title">
							JavaScript
						</div>
						<div class="me-lang-desc">
							5 years
						</div>
					</div>
					<div class="me-lang" data-ten="7">
						<div class="me-lang-title">
							JQuery
						</div>
						<div class="me-lang-desc">
						 	5 years
						</div>
					</div>
					<div class="me-lang" data-ten="6">
						<div class="me-lang-title">
							HTML
						</div>
						<div class="me-lang-desc">
							6 years
						</div>
					</div>
					<div class="me-lang" data-ten="7">
						<div class="me-lang-title">
							PHP
						</div>
						<div class="me-lang-desc">
							3 years
						</div>
					</div>
					<div class="me-lang" data-ten="1">
						<div class="me-lang-title">
							Python
						</div>
						<div class="me-lang-desc">
							1 years
						</div>
					</div>
					<div class="me-lang" data-ten="4">
						<div class="me-lang-title">
							SQL
						</div>
						<div class="me-lang-desc">
							2 years
						</div>
					</div>
				</div>
				<div id="me-resume" class="me-row">
					<a id="me-resdown" href="../../static/files/PublicResume.pdf" download>
						Resume
					</a>
				</div>
			</div>
			<div id="larrow">
				<a id="la-int" class="a-int">
					<div class="a-arrow">
						<i></i>
					</div>
					<div class="a-text">
						About
					</div>
				</a>
			</div>
			<div id="main">

			</div>
			<div id="code">

			</div>
			<div id="rarrow">
				<a id="ra-int" class="a-int">
					<div class="a-arrow">
						<i></i>
					</div>
					<div class="a-text">
						Code
					</div>
				</a>
			</div>
			<div id="barrow">
				<a id="ba-int" class="a-int">
					<div class="a-arrow">
						<i></i>
					</div>
					<div class="a-text">
						Contact
					</div>
				</a>
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

			$(document).ready(function() {
				haveContactDisplay();
				aboutSize();

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
					$(this).css({'background':'linear-gradient(90deg, var(--accent) '+ten+'0%, transparent 0%)'});
				});

				$('#la-int').click(function() {
					// IF ANY OTHER MODULE IS OPEN, SHRINK IT -- ONLY ONE CAN BE OPEN AT ONCE
					if($('#code').css('right') == '0px')
						shrinkCode();
					else if($('#contact').css('bottom') == '0px')
						shrinkContact();

					if($('#me').css('left') != '0px')
						growMe();
					else
						shrinkMe();
				});

				$('#ra-int').click(function() {
					// IF ANY OTHER MODULE IS OPEN, SHRINK IT -- ONLY ONE CAN BE OPEN AT ONCE
					if($('#me').css('left') == '0px')
						shrinkMe();
					else if($('#contact').css('bottom') == '0px')
						shrinkContact();

					if($('#code').css('right') != '0px')
						growCode();
					else
						shrinkCode();
				});

				$('#ba-int').click(function() {
					// IF ANY OTHER MODULE IS OPEN, SHRINK IT -- ONLY ONE CAN BE OPEN AT ONCE
					if($('#me').css('left') == '0px')
						shrinkMe();
					else if($('#code').css('right') == '0px')
						shrinkCode();

					if($('#contact').css('bottom') != '0px')
						growContact();
					else
						shrinkContact();
				});
			});

			$(window).resize(function() {
				haveContactDisplay();
				aboutSize();
			});

			function aboutSize() {
				if($(window).width() < 800 || isMobile) {
					$('.me-row').css({'padding':'0px','width':'100%'});
					$('#me-img').css({'border-radius':'75px', 'height':'75px'});
					$('#me-name').css({'font-size':'18px'});
					$('#me-title').css({'font-size':'14px'});
					$('#me-job').css({'font-size':'16px'});
					$("#me-tgt").css({'font-size':'12px', 'margin':'5px', 'padding':'10px', 'width':'calc(100% - 30px)'});
					$("#me-tgt-title").css({'font-size':'14px'});
					$('#me-school').css({'font-size':'16px'});
					$("#me-uw").css({'font-size':'12px', 'margin':'5px', 'padding':'10px', 'width':'calc(100% - 30px)'});
					$("#me-uw-title").css({'font-size':'14px'});
					$('.me-lang').css({'margin':'3px','padding':'3px 10px'});
					$('.me-lang-title').css({'font-size':'14px'});
					$('.me-lang-desc').css({'font-size':'12px'});
					$('#me-resdown').css({'font-size':'14px'});
				} else {
					$('.me-row').css({'padding':'5px 10px','width':'calc(100% - 20px)'});
					$('#me-img').css({'border-radius':'100px', 'height':'100px'});
					$('#me-name').css({'font-size':'20px'});
					$('#me-title').css({'font-size':'16px'});
					$('#me-job').css({'font-size':'18px'});
					$("#me-tgt").css({'font-size':'14px', 'margin':'10px', 'padding':'15px', 'width':'calc(100% - 50px)'});
					$("#me-tgt-title").css({'font-size':'16px'});
					$('#me-school').css({'font-size':'18px'});
					$("#me-uw").css({'font-size':'14px', 'margin':'10px', 'padding':'15px', 'width':'calc(100% - 50px)'});
					$("#me-uw-title").css({'font-size':'16px'});
					$('.me-lang').css({'margin':'5px','padding':'5px 15px'});
					$('.me-lang-title').css({'font-size':'16px'});
					$('.me-lang-desc').css({'font-size':'14px'});
					$('#me-resdown').css({'font-size':'16px'});
				}
			}

			function haveContactDisplay() {
				if($(window).width() < 700 || isMobile) {
					$('#contact-display').css({'display':'none'});
					$('.contact-img').css({'height':'60px','padding':'10px 5px'});
				} else {
					$('#contact-display').css({'display':'flex'});
					$('.contact-img').css({'height':'70px','padding':'5px'});
				}
			}

			function growMe() {
				$('#barrow').css({'display':'none'});
				$('#me').stop().animate({'left':'0px'});
				$('#larrow').stop().animate({'left':'60%'});
				$('#la-int').find('i').css({'transform':'rotate(45deg)'});
			}

			function shrinkMe() {
				$('#me').stop().animate({'left':'-60%'});
				$('#larrow').stop().animate({'left':'0px'});
				$('#la-int').find('i').css({'transform':'rotate(-135deg)'});
				$('#barrow').css({'display':'inline-block'});
			}

			function growCode() {
				$('#barrow').css({'display':'none'});
				$('#code').stop().animate({'right':'0%'});
				$('#rarrow').stop().animate({'right':'60%'});
				$('#ra-int').find('i').css({'transform':'rotate(45deg)'});
			}

			function shrinkCode() {
				$('#code').stop().animate({'right':'-60%'});
				$('#rarrow').stop().animate({'right':'0px'});
				$('#ra-int').find('i').css({'transform':'rotate(-135deg)'});
				$('#barrow').css({'display':'inline-block'});
			}

			function growContact() {
				$('#contact').stop().animate({'bottom':'0px'});
				$('#barrow').stop().animate({'bottom':'80px'});
				$('#ba-int').find('i').css({'transform':'rotate(45deg)'});
			}

			function shrinkContact() {
				$('#contact').stop().animate({'bottom':'-80px'});
				$('#barrow').stop().animate({'bottom':'0px'});
				$('#ba-int').find('i').css({'transform':'rotate(-135deg)'});
			}
		</script>
	</body>
</html>
