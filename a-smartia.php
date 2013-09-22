<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Sobre a Smartia</title>
		
		<meta name="author" content="Smartia" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

		<link rel="shortcut icon" href="assets/images/favico.ico">
		<link rel="apple-touch-icon-precomposed" href="assets/images/layout/icon-ios.png">
		
		<link rel="stylesheet" href="assets/css/style.css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
		
		<!--[if IE 8]>
			<script type="text/javascript" src="assets/js/ie8.min.js"></script>
		<![endif]-->
		
		<!-- Typekit -->
		<script type="text/javascript" src="//use.typekit.net/sxe8qvx.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script>
			var WAIT_FONTS_INTERVAL = 10;
			var WAIT_FONTS_TIMEOUT = 10000;
			var WAIT_TIME = 0;  
			function waitFonts() {
				WAIT_TIME += WAIT_FONTS_INTERVAL;
				var html = document.getElementsByTagName('html')[0];
				if (html.className.indexOf('wf-active') > -1 || WAIT_TIME > WAIT_FONTS_TIMEOUT) {
					html.className = html.className.replace(/\bwaitfonts\b/,'');
				} else {
					window.setTimeout(waitFonts, WAIT_FONTS_INTERVAL);
				}
			}
			waitFonts();
		</script>
		
	</head>
	
	<body>
		
		<?php include('includes/header.php'); ?>
		
		<div class="page-title">
			<div class="container single-page">		
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li><a href="#">Sobre a Smartia</a></li>
			  <li class="active">A Smartia</li>
			</ol>
			<h1>A Smartia</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="page-with-aside with-padding institucional"> 
						
						<p class="big">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. </p>
						<img class="full-size" src="assets/images/smartia.jpg" alt="Smartia | Seguros on-line" />
						
						<h3 class="yellow mb-15">Visão</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta rutrum lorem, nec vestibulum leo lacinia in. Curabitur pretium sit amet magna quis commodo. Phasellus feugiat blandit lacinia. Suspendisse mattis neque sem, quis facilisis nunc porttitor ac. Vivamus nec gravida sem. Aliquam nec sem quis tellus volutpat consequat ut id lorem. Nulla lacinia metus vitae odio eleifend blandit. Maecenas sollicitudin eget dolor non iaculis. Phasellus ac pulvinar arcu. Morbi eget ante laoreet, laoreet eros id, pharetra mi. Nunc ligula diam, euismod eu ligula in, pulvinar eleifend dolor.</p>
						
						<h3 class="yellow mb-15">Missão &amp; Valores</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta rutrum lorem, nec vestibulum leo lacinia in. Curabitur pretium sit amet magna quis commodo. Phasellus feugiat blandit lacinia. Suspendisse mattis neque sem, quis facilisis nunc porttitor ac. Vivamus nec gravida sem. Aliquam nec sem quis tellus volutpat consequat ut id lorem. Nulla lacinia metus vitae odio eleifend blandit. Maecenas sollicitudin eget dolor non iaculis. Phasellus ac pulvinar arcu. Morbi eget ante laoreet, laoreet eros id, pharetra mi. Nunc ligula diam, euismod eu ligula in, pulvinar eleifend dolor.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta rutrum lorem, nec vestibulum leo lacinia in. Curabitur pretium sit amet magna quis commodo. Phasellus feugiat blandit lacinia. Suspendisse mattis neque sem, quis facilisis nunc porttitor ac. Vivamus nec gravida sem. Aliquam nec sem quis tellus volutpat consequat ut id lorem. Nulla lacinia metus vitae odio eleifend blandit. Maecenas sollicitudin eget dolor non iaculis. Phasellus ac pulvinar arcu. Morbi eget ante laoreet, laoreet eros id, pharetra mi. Nunc ligula diam, euismod eu ligula in, pulvinar eleifend dolor.</p>
						
						<h3 class="yellow mb-15">Propósito</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta rutrum lorem, nec vestibulum leo lacinia in. Curabitur pretium sit amet magna quis commodo. Phasellus feugiat blandit lacinia. Suspendisse mattis neque sem, quis facilisis nunc porttitor ac. Vivamus nec gravida sem. Aliquam nec sem quis tellus volutpat consequat ut id lorem. Nulla lacinia metus vitae odio eleifend blandit. Maecenas sollicitudin eget dolor non iaculis. Phasellus ac pulvinar arcu. Morbi eget ante laoreet, laoreet eros id, pharetra mi. Nunc ligula diam, euismod eu ligula in, pulvinar eleifend dolor.</p>
						
						
					</section>
					<aside class="aside-with-page">
						<ul class="aside-links">
							<li><a class="active" href="a-smartia.php">A Smartia</a></li>
							<li><a href="#">Depoimentos</a></li>
							<li><a class="last" href="sala-de-imprensa.php">Sala de Imprensa</a></li>
						</ul>
					</aside>
					
					<br />
					
				</div>
			</div>
		</div>
		
		<?php include('includes/footer.php'); ?>
		<?php include('includes/modal.php'); ?>
		
		<?php include('includes/scripts.php'); ?>
		
	</body>
</html>