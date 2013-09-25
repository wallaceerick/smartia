<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Segurança</title>
		
		<meta name="author" content="Smartia" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

		<link rel="shortcut icon" href="static/v3/images/favico.ico">
		<link rel="apple-touch-icon-precomposed" href="static/v3/images/layout/icon-ios.png">
		
		<link rel="stylesheet" href="static/v3/styles/reset.css" media="all" />  
		<link rel="stylesheet" href="static/v3/styles/bootstrap.css" media="all" />  
		<link rel="stylesheet" href="static/v3/styles/inside.css" media="all" /> 
		<link rel="stylesheet" href="static/v3/styles/common.css" media="all" /> 
		<link rel="stylesheet" href="static/v3/styles/header.css" media="all" /> 
		<link rel="stylesheet" href="static/v3/styles/footer.css" media="all" />
		<link rel="stylesheet" href="static/v3/styles/inputs.css" media="all" />
		<link rel="stylesheet" href="static/v3/styles/select.css" media="all" />
		
		<!--[if IE 8]>
			<script type="text/javascript" src="static/v3/scripts/ie8.min.js"></script>
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
			  <li class="active">Segurança</li>
			</ol>
			<h1>Segurança</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="page-with-aside with-padding institucional"> 
						
						<h3 class="yellow mb-15">Calcule o valor de seguro online com segurança</h3>
						<p>A Smartia é um serviço que trabalha com as tecnologias mais avançadas de proteção de dados para que você possa realizar seus cálculos com tranquilidade e segurança.</p>
						<p>Quando você solicita um cálculo, as informações são coletadas e processadas unicamente em nossos servidores e os dados são armazenados em um banco de dados totalmente protegido e sigiloso.</p>
						<p>Nós desejamos que você se sinta confortável e seguro de que todas as informações fornecidas estão sendo protegidas com rigoroso cuidado por nosso site, com o objetivo de preservar sua privacidade.</p>
						
						<h4 class="yellow mb-15">Segurança das informações</h4>
						<p>Disponibilizamos os seguintes componentes de segurança nos nossos servidores:</p>
						<p>
							- Barreiras físicas de proteção (Firewall); <br />
							- Criptografia avançada; <br />
							- Protocolos de autenticação; <br />
							- Certificados, assinaturas digitais e selos digitais; <br />
							- Conexão segura (SSL) com protocolo HTTPS. Veja exemplos nos principais browsers:
						</p>
						<p>No Chrome:</p>
						<img src="static/v3/images/seguranca-no-chrome.jpg" alt="Segurança no Chrome" />
						
						<p>No Firefox:</p>
						<img src="static/v3/images/seguranca-no-firefox.jpg" alt="Segurança no Firefox" />
						
						<p>No Internet Explorer:</p>
						<img src="static/v3/images/seguranca-no-internet-explorer.jpg" alt="Segurança no Internet Explorer" />
						
					</section>
					
					<aside class="aside-with-page">
						<!-- Sidebar content -->
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