<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130507773-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-130507773-1');
	</script>

    <!--
		alexvanmatre
        Author: Alexander J Van Matre

        Current Site Iteration: 1
		Current Site Version: ALPHA
    -->
    <!-- SETUP -->
    <!-- IMPORTS -->
    <!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:700|Montserrat:400,600" rel="stylesheet">
	<!--EXTERNAL LIBRARIES-->
	<!--JQUERY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<!--MODERNIZR-->
    <script src="<?php echo $prefix ?>static/modernizr.js" ></script>

  	<!-- STYLES -->
    <link href="<?php echo $prefix ?>globals/global.css" rel="stylesheet" type="text/css" />
	<!-- SCRIPTS -->

    <!-- LOGO SETUP -->
    <link id="favicon" href="<?php echo $prefix ?>static/images/logos/logo.gif" rel="icon" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo $prefix ?>static/images/logos/logo.gif" >
    <link rel="apple-touch-icon" href="<?php echo $prefix ?>static/images/logos/logo.gif" >

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
	<script>
		$(document).ready(function() {
			mobileHeader(); mobileFooter(); headerHover(); footerHover(); mobileClicker();
			$('.gr_-editor.gr-iframe-first-load').parent().css({'display':'none'});
		});
		$(window).resize(function() {mobileHeader(); mobileFooter()});
		$(window).on("scroll", function() {dropHeader()});

		var isMobile = false;

		if( navigator.userAgent.match(/Android/i)
		 || navigator.userAgent.match(/webOS/i)
		 || navigator.userAgent.match(/iPhone/i)
		 || navigator.userAgent.match(/iPad/i)
		 || navigator.userAgent.match(/iPod/i)
		 || navigator.userAgent.match(/BlackBerry/i)
		 || navigator.userAgent.match(/Windows Phone/i)
		) { isMobile = true; }

		function mobileFooter() {
			if($(window).width() < 600 || isMobile) {
				$('footer').css({'display':'block'});
				$('#f-l-links').css({'display':'block'});
			} else {
				$('footer').css({'display':'flex'});
				$('#f-l-links').css({'display':'flex'});
			}
		}

		function mobileHeader() {
			if($(window).width() < 750 || isMobile) {
				$('#h-r-desktop').addClass('disabled');
				$('#h-r-mobile').removeClass('disabled');

				$("header").css({'background-color':'rgba(0,0,0,.6)', 'height':'49px', 'position':'fixed'});
				$('#h-l-ln-l-img').attr('src','<?php echo strval($prefix.'static/images/logos/logoinverted.gif') ?>');
				$('#h-l-ln-name').css({'color':'white','padding':'15px 5px'});

			} else {
				$('#h-r-mobile').addClass('disabled');
				$('#mobiledropdown').addClass('disabled');
				$('#h-r-desktop').removeClass('disabled');

				$("header").css({'background-color':'transparent', 'height':'101px', 'position':'absolute'});
				$('#h-l-ln-l-img').attr('src','<?php echo strval($prefix.'static/images/logos/logo.gif') ?>');
				$('#h-l-ln-name').css({'color':'black','padding':'41px 5px'});
			}
		}

		function mobileClicker() {
			$('#h-r-m-clickable').click(function() {
				if($('#mobiledropdown').hasClass('disabled')) {
					$('#mobiledropdown').removeClass('disabled');
				} else {
					$('#mobiledropdown').addClass('disabled');
				}
			});

			$('#mdd-c-button').click(function() {
				$('#mobiledropdown').addClass('disabled');
			});
		}

		var prevHeight = 0;
		var topCheck = 70;
		var originalcolor = '';

		function dropHeader() {
			if(isMobile || $(window).width() < 750)
				return;
			if(($(window).scrollTop() > topCheck && prevHeight < topCheck)){
				originalcolor = $('.h-r-d-i-l-text').css('color');
				$("header").stop().animate({'background-color':'rgba(0,0,0,.6)', 'height':'49px'});
				$('header').css({'position':'fixed'});
				$('.h-r-d-i-l-text').stop().animate({'color':'white'});
				$('#h-l-ln-name').stop().animate({'color':'white', 'padding-top':'15px'});
				$('.h-r-d-i-link').stop().animate({'padding-top':'15px'});
				$('#h-l-ln-l-img').attr('src','<?php echo strval($prefix.'static/images/logos/logoinverted.gif') ?>');
			} else if($(window).scrollTop() <= topCheck && prevHeight >= topCheck) {
				$("header").stop().animate({'background-color':'transparent', 'height':'101px', 'position':'absolute'});
				$('.h-r-d-i-l-text').stop().animate({'color':originalcolor});
				$('#h-l-ln-name').stop().animate({'color':originalcolor, 'padding-top':'41px'});
				$('.h-r-d-i-link').stop().animate({'padding-top':'41px'});
				$('#h-l-ln-l-img').attr('src','<?php echo strval($prefix.'static/images/logos/logo.gif') ?>');
			}
			prevHeight = $(window).scrollTop();
		}

		function headerHover() {
			$('.h-r-d-i-link').hover(function() {
				var amount = $(this).css('padding-bottom');
				amount = amount.substring(0, amount.length - 2) - 4;
				$(this).css({'padding-bottom': amount + 'px', 'border-bottom':'4px solid #4286f4'});
			}, function() {
				var amount = $(this).css('padding-bottom');
				amount = parseFloat(amount.substring(0, amount.length - 2)) + 4;
				$(this).css({'padding-bottom': amount + 'px', 'border-bottom':'0px solid #4286f4'});
			});
		}

		function footerHover() {
			$('.f-l-l-i-link').hover(function() {
				$('.f-l-l-i-l-text').stop().animate({'color':'rgba(255, 255, 255, .5)'});
				var text = $(this).find('.f-l-l-i-l-text');
				$(text).stop().css({'color':'white'});
				$(this).stop().animate({'background-color':'rgba(255, 255, 255, .1)'});
			}, function() {
				$('.f-l-l-i-l-text').stop().animate({'color':'rgba(255, 255, 255, 1)'});
				$(this).stop().animate({'background-color':'rgba(255, 255, 255, 0)'});
			});
		}
	</script>
</head>
