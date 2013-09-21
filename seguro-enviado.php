<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Seguro Frota</title>
		
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
			  <li><a href="#">Produtos</a></li>
			  <li class="active">Seguro Frota</li>
			</ol>
			<h1>Seguro Frota</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="page-with-aside">
						<div class="product-type no-border">
							<img src="assets/images/icon-send.gif" alt="" class="send-icon" />
							<h2 class="sended">Seu pedido foi enviado com <span>sucesso</span>!</h2>
							<h3>Nossos atendentes entraram em contato com você nas próximas 24 horas.</h3>
							<p>Você receberá um e-mail comprovando o seu pedido de orçamento em alguns instantes no endereço de e-mail cadastrado.</p>
						</div> 
							
						<hr class="dotted full" />
						<button type="button">Finalizar</button> 
						
					</section>
					<aside class="aside-with-page">
						<ul class="aside-links">
							<li><a href="#">FAQ - Perguntas Frequentes</a></li>
							<li><a class="last" href="#">Dicionário do “Segurês”</a></li>
						</ul>
						<div class="aside-box">
							<img src="assets/images/compre-tel.gif" alt="Compre pelo Telefone" />
							<span class="tel"><strong>0800</strong> 762 7842</span>
							<span class="small">Ou também através do nosso CHAT.</span>
							<a href="#" class="chat-on">Chat On-line</a>
							<hr class="dotted" />
							<span class="small">Atendimento de segunda à sexta das 08h20 às 21h00 e Sábados das 10h às 16h.</span>
						</div>
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