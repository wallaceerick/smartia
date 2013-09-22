<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Entre em contato com a Smartia Seguros Online e fale conosco.</title>
		
		<meta name="author" content="Smartia" />
		<meta name="keywords" content="" />
		<meta name="description" content="Querendo entrar em contato com a Smartia Seguros Online? Acesse este link e preencha o formulário para falar conosco." />

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
			  <li><a href="#">Contato</a></li>
			  <li class="active">Fale Conosco</li>
			</ol>
			<h1>Fale Conosco</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="page-with-aside with-padding"> 
						
						<form action="" method="post">
							
							<p><strong>Nome completo:</strong></p> 
							<input type="text" name="" />
							
							<div class="row extra-padding">
								<div class="col-md-6">
									<p><strong>Email:</strong></p>
									<input type="text" name="" />
								</div>
								<div class="col-md-6">
									<p><strong>Telefone:</strong></p>
									<input class="tel" type="text" name="" placeholder="Ex: (XX) 9999-9999" />
								</div>
							</div>
							
							<br />
							<p><strong>Mensagem:</strong></p>
							<textarea></textarea> 
							
							<div class="row gray-backgound">
								<div class="col-md-9 align-right small-p">
									<span class="small-p">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. <br />
										Nulla lacinia iaculis nulla non ptulvinar.Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br />
										Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non ptulvinar.
									</span>
								</div>
								<div class="col-md-3">
									<button type="button" class="no-margin">Enviar »</button>
								</div>
							</div> 
							
						</form>
						
						
					</section>
					<aside class="aside-with-page">
						<ul class="aside-links">
							<li><a class="active" href="fale-conosco.php">Fale Conosco</a></li>
							<li><a class="last" href="trabalhe-conosco.php">Trabalhe Conosco</a></li>
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