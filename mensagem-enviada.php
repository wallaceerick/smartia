<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Sua mensagem foi enviada com sucesso para a Smartia Seguros Online.</title>
		
		<meta name="author" content="Smartia" />
		<meta name="keywords" content="" />
		<meta name="description" content="Obrigado, sua cotação foi enviada com sucesso para nossos consultores." />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

		<link rel="shortcut icon" href="static/v3/images/favico.ico">
		<link rel="apple-touch-icon-precomposed" href="static/v3/images/layout/icon-ios.png">
		
		<link rel="stylesheet" href="static/v3/styles/style.css" media="all" />
		
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
					<section class="page-with-aside">
						<div class="product-type no-border">
							<img src="static/v3/images/icon-send-msg.gif" alt="Sua mensagem foi enviada com sucesso!" class="send-icon-mg" />
							<h2 class="sended">Sua mensagem foi enviada <br />com <span>sucesso</span>!</h2>
							<h3>Logo mais estaremos entrando em contato com você.</h3>
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
							<img src="static/v3/images/compre-tel.gif" alt="Compre pelo Telefone" />
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