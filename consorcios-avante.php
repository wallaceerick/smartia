<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Consórcios Avante. Smartia Seguros Online.</title>
		
		<meta name="author" content="Smartia" />
		<meta name="keywords" content="" />
		<meta name="description" content="Buscando consórcios? Veja aqui no site da Smartia Seguros Online como você pode solicitar o seu com a Avante." />

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
			  <li><a href="#">Produtos</a></li>
			  <li class="active">Consórcios</li>
			</ol>
			<h1>Consórcio / Avante.com</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="page-with-aside with-padding">
						<img src="static/v3/images/avante.gif" alt="" />
						<p>Para ajudar ainda mais nossos clientes a escolher serviços financeiros de forma rápida e confiável, a Smartia traz uma nova parceria para você. Trata-se da <a href="http://www.avante.com" target="_blank" class="red">Avante.com</a>, uma empresa de consórcios online, que conecta as instituições financeiras em só lugar. Ou seja, seu próprio website.</p>
						<p>Com a Avante você pode realizar seus sonhos sem pegar nenhuma fila de atendimento. Além disso, pesquisam as melhores taxas do mercado para apresentar a você. Com a <a href="http://www.avante.com" target="_blank" class="red">Avante.com</a> você tem as melhores informações para fechar o melhor negócio.</p>
							
						<hr class="dotted" /> 
						
						<form action="" method="post">
							<h3>Pesquise e compre seu consórcio online!</h3>
							<h4>Consórcio é muito mais barato!</h4>
							
							<p><strong>Nome completo:</strong></p>
							<input type="text" name="" />
							<div class="row extra-padding">
								<div class="col-md-8">
									<p><strong>Email:</strong></p>
									<input type="text" name="" />
								</div>
								<div class="col-md-4">
									<p><strong>Telefone:</strong></p>
									<input class="tel" type="text" name="" placeholder="Ex: (XX) 9999-9999" />
								</div> 
							</div> 
							<div class="row extra-padding">
								<div class="col-md-5">
									<p><strong>Valor da Parcela:</strong></p>
									<input class="parcela" type="text" name=""  placeholder="R$ 00,00" />
								</div>
								<div class="col-md-7"></div> 
							</div>  
							
							
							<p><strong>Ofertas de:</strong></p>
							<select class="customized">
							    <option value="hide">Selecione um tipo de oferta...</option>
							    <option value="option-1">Imóveis</option>
							    <option value="option-2">Viagens</option>
							    <option value="option-3">Veículos</option>
							</select>
							
							<hr class="dotted full" />
							<button type="button">Ver Ofertas</button>
						</form>
						
					</section>
					<aside class="aside-with-page">
						<ul class="aside-links">
							<li><a href="#">Seguro Automóvel</a></li>
							<li><a href="#">Seguro Motocicleta</a></li>
							<li><a href="#">Seguro Caminhão</a></li>
							<li><a href="#">Seguro Táxi</a></li>
							<li><a href="#">Seguro Frota</a></li> 
							<li><a class="active last" href="#">Consórcio / Avante.com”</a></li>
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