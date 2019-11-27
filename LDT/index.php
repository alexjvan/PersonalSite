<?php
	include_once('DB.php');
?>
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
		<script src="../static/modernizr.js" ></script>

		<!-- STYLES -->
		<link href="index.css" rel="stylesheet" type="text/css" />
		<!-- SCRIPTS -->


		<!-- LOGO SETUP -->
		<link id="favicon" href="../static/images/logos/logo.gif" rel="icon" type="image/x-icon" />
		<link rel="shortcut icon" href="../static/images/logos/logo.gif" >
		<link rel="apple-touch-icon" href="../static/images/logos/logo.gif" >

		<!--OPTIMIZATION-->
		<meta http-equiv="Content-Language" contet="en-us" />
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="author" content="Alex Van Matre" />
		<meta name="robots" content="index, follow" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>LDT Project - CSS 475</title>

		<!-- EMERGENCY CSS-->
		<style>
			.disabled {
				display: none!important;
			}
		</style>
	</head>
	<body>
		<div id="content">
			<div id="title">
				Choose one language to explore, and two to compare.
			</div>
			<div id="choice">
				<div id="cone">
					<div class="choiceset">
						<div class="choice">
							C#
						</div>
						<div class="choice">
							Java
						</div>
						<div class="choice">
							Python
						</div>
					</div>
				</div>
				<div id="ctwo">
					<div class="choiceset">
						<div class="choice">
							C#
						</div>
						<div class="choice">
							Java
						</div>
						<div class="choice">
							Python
						</div>
					</div>
				</div>
			</div>
<!--
			<div id="datatype">
				<div id="dtchoices">
					<div class="dtchoice">
						Bool
					</div>
					<div class="dtchoice">
						Int
					</div>
					<div class="dtchoice">
						String
					</div>
				</div>
			</div>
-->
			<div id="langs">
				<div id="one">

				</div>
				<div id="two">

				</div>
			</div>

			<div id="console">
				<div id="feed">

				</div>
				<input id="input" />
				<button id="enter">Enter</button>
			</div>
		</div>
	</body>
</html>
<script>
	var oneLang = null;
	var twoLang = null;

	$(document).ready(function() {
		$('.choice').click(function() {
			$(this).parent().children().each(function() {
				if($(this).hasClass('selected'))
					$(this).removeClass('selected');
			});
			if($(this).parent().parent().attr('id') == 'cone') {
				$($('#ctwo').find('.choiceset')[0]).children().each(function() {
					if($(this).hasClass('selected'))
						$(this).removeClass('selected');
				});
				oneLang = $(this).html();
				twoLang = null;
			} else {
				twoLang = $(this).html();
			}


			$(this).addClass('selected');
			var id = $(this).parent().parent().attr('id');
			id = id.substr(1);

			var items;
			if(twoLang == null) {
				items = Query('SELECT * FROM DataTypeInLang AS dtil, Methods as m, Parameters as p WHERE dtil.Language='+oneLang+' AND dtil.id=m.DataTypeInLangID AND p.MethodID=m.id;');
			}
			console.log(items);
		});

		$('.dtchoice').click(function() {

		});

		$('#enter').click(function() {
			parseInput();
		});

		$('#input').keypress(function (e) {
		  if (e.which == 13) {
			  parseInput();
		  }
		});
	});

	function parseInput() {
		var val = $('#input').val();
		$('#input').val('');
		Query(val);
	}

	function Query(q) {
		$('#feed').append("<br />" + q);
		var messageBody = document.querySelector('#feed');
		messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;
		$.ajax({
			url:'callQuery.php',
			type:'POST',
			async: false,
			cache:false,
			data: {
				query:q
			},
			success:function(data) {
				$('#feed').append("<br />" + data);
				var messageBody = document.querySelector('#feed');
				messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;
				return data;
			},
			error:function(data) {
				console.log(data);
			}
		});
	}
</script>
