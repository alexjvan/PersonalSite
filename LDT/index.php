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
						<div class="choice">C#</div>
						<div class="choice">Java</div>
						<div class="choice">Python</div>
					</div>
				</div>
				<div id="ctwo">
					<div class="choiceset">
						<div class="choice">C#</div>
						<div class="choice">Java</div>
						<div class="choice">Python</div>
					</div>
				</div>
			</div>
			<div id="langs">
				<div id="one">
					<div class="langtitle"></div>
					<div class="langboolsame"></div>
					<div class="langintsame"></div>
					<div class="langstringsame"></div>
					<div class="langbool"></div>
					<div class="langint"></div>
					<div class="langstring"></div>
				</div>
				<div id="two">
					<div class="langtitle"></div>
					<div class="langboolsame"></div>
					<div class="langintsame"></div>
					<div class="langstringsame"></div>
					<div class="langbool"></div>
					<div class="langint"></div>
					<div class="langstring"></div>
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

			if(twoLang == null) {
				Query('SELECT dtil.DataType, dtil.Name, dtil.Language, m.Method, p.Type FROM DataTypeInLang AS dtil, Methods as m, Parameters as p WHERE dtil.Language=\''+oneLang+'\' AND dtil.id=m.DataTypeInLangID AND p.MethodID=m.id;');
				setTimeout(function() {
					$('#one').find('.langtitle').html(oneLang);
					$('#two').find('.langtitle').html('');

					$('#one').find('.langstringsame').html('');
					$('#one').find('.langintsame').html('');
					$('#one').find('.langboolsame').html('');
					$('#one').find('.langstring').html('');
					$('#one').find('.langint').html('');
					$('#one').find('.langbool').html('');
					$('#two').find('.langstringsame').html('');
					$('#two').find('.langintsame').html('');
					$('#two').find('.langboolsame').html('');
					$('#two').find('.langstring').html('');
					$('#two').find('.langint').html('');
					$('#two').find('.langbool').html('');

					for(var row = 0; row < qData.length; row++) {
						if(qData[row]['DataType'] == 'String') {
							if($('#one').find('.langstring').html() == "") {
								$('#one').find('.langstring').append('<div class="langitem"><div class="langname">'+qData[row]["Name"]+'</div><div class="langmethods"><div class="lm-row"><div class="lm-name">'+qData[row]["Method"]+'</div><div class="lm-params">'+qData[row]["Type"]+'</div></div></div></div>');
							} else {
								$('#one').find('.langstring').find('.langmethods').append('<div class="lm-row"><div class="lm-name">'+qData[row]["Method"]+'</div><div class="lm-params">'+qData[row]["Type"]+'</div>');
							}
						} else if(qData[row]['DataType'] == 'Integer') {
							if($('#one').find('.langint').html() == "") {
								$('#one').find('.langint').append('<div class="langitem"><div class="langname">'+qData[row]["Name"]+'</div><div class="langmethods"><div class="lm-row"><div class="lm-name">'+qData[row]["Method"]+'</div><div class="lm-params">'+qData[row]["Type"]+'</div></div></div></div>');
							} else {
								$('#one').find('.langint').find('.langmethods').append('<div class="lm-row"><div class="lm-name">'+qData[row]["Method"]+'</div><div class="lm-params">'+qData[row]["Type"]+'</div>');
							}
						} else if(qData[row]['DataType'] == 'Boolean') {
							if($('#one').find('.langbool').html() == "") {
								$('#one').find('.langbool').append('<div class="langitem"><div class="langname">'+qData[row]["Name"]+'</div><div class="langmethods"><div class="lm-row"><div class="lm-name">'+qData[row]["Method"]+'</div><div class="lm-params">'+qData[row]["Type"]+'</div></div></div></div>');
							} else {
								$('#one').find('.langbool').find('.langmethods').append('<div class="lm-row"><div class="lm-name">'+qData[row]["Method"]+'</div><div class="lm-params">'+qData[row]["Type"]+'</div>');
							}
						}
					}
				}, 100);
			} else {
				Query('SELECT one.DataType, one.Name, one.Language, onem.Method, onep.Type, two.DataType, two.Name, two.Language, twom.Method, twop.Type FROM Equivalency as eq, Methods as onem, Methods as twom, DataTypeInLang as one, DataTypeInLang as two, Parameters as onep, Parameters as twop WHERE eq.MethodID=onem.id AND eq.EQID=twom.id AND one.Language=\''+oneLang+'\' AND two.Language=\''+twoLang+'\' AND onem.DataTypeInLangID=one.id AND twom.DataTypeInLangID=two.id AND onep.MethodID=onem.id AND twop.MethodID=twom.id;');
				setTimeout(function() {
					console.log(qData);
					$('#one').find('.langstringsame').html('');
					$('#one').find('.langintsame').html('');
					$('#one').find('.langboolsame').html('');
					$('#one').find('.langstring').html('');
					$('#one').find('.langint').html('');
					$('#one').find('.langbool').html('');
					$('#two').find('.langstringsame').html('');
					$('#two').find('.langintsame').html('');
					$('#two').find('.langboolsame').html('');
					$('#two').find('.langstring').html('');
					$('#two').find('.langint').html('');
					$('#two').find('.langbool').html('');

					$('#one').find('.langtitle').html(oneLang);
					$('#two').find('.langtitle').html(twoLang);

					for(var row = 0; row < qData.length; row++) {
						// index 0-4 is onelang, inde 5-9 is twolang
						if(qData[row]['DataType'] == 'String') {
							if($('#one').find('.langstring').html() == "") {
								$('#one').find('.langstringsame').append('<div class="langitem"><div class="langname">'+qData[row][1]+'</div><div class="langmethods"><div class="lm-row"><div class="lm-name">'+qData[row][3]+'</div><div class="lm-params">'+qData[row][4]+'</div></div></div></div>');
								$('#two').find('.langstringsame').append('<div class="langitem"><div class="langname">'+qData[row][6]+'</div><div class="langmethods"><div class="lm-row"><div class="lm-name">'+qData[row][8]+'</div><div class="lm-params">'+qData[row][9]+'</div></div></div></div>');
							} else {
								$('#one').find('.langstringsame').find('.langmethods').append('<div class="lm-row"><div class="lm-name">'+qData[row][3]+'</div><div class="lm-params">'+qData[row][4]+'</div>');
								$('#two').find('.langstringsame').find('.langmethods').append('<div class="lm-row"><div class="lm-name">'+qData[row][8]+'</div><div class="lm-params">'+qData[row][9]+'</div>');
							}
						}
					}

				}, 200);
			}
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

	var qData;

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
					qData = JSON.parse(data);
			},
			error:function(data) {
				console.log(data);
			}
		});
	}
</script>
