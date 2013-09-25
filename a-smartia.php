<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Conheça mais sobre a Smartia Seguros Online.</title>
		
		<meta name="author" content="Smartia" />
		<meta name="keywords" content="" />
		<meta name="description" content="A Smartia é o primeiro site brasileiro a fazer cotação de Seguros Online. Saiba mais sobre a Smartia aqui no nosso site." />

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
						
						<p class="big">A Smartia foi fundada em  maio de 2010, e é pioneira em seguros para automóvel via web. Com estrutura tecnológica própria e sede no Rio de Janeiro, a empresa atende consumidores em todo o território nacional. Através do site da Smartia, você pode comparar e efetuar o contrato da sua apólice em várias seguradoras simultaneamente, sem precisar de corretor ou sair  de casa. Faça já sua cotação e compare! </p>
						<img class="full-size" src="static/v3/images/smartia.jpg" alt="Smartia | Seguros on-line" />
						
						<h3 class="yellow mb-15">Visão</h3>
						<p>Ser a maior corretora de seguros massificados do Brasil até 2022</p>
						
						<h3 class="yellow mb-15">Missão &amp; Valores</h3>
						<p>
							Vender seguros de forma inovadora; <br />
							Audácia, para mudar o mercado <br />
							Coragem, para vencer os desafios <br />
							Excelência, em tudo o que fazemos <br />
							Inovação, como ferramenta para avançar <br />
							Integridade, como estilo de vida <br />
							Respeito, pelos colaboradores e clientes <br />
						</p>
						<h3 class="yellow mb-15">Propósito</h3>
						<p>Oferecer transparência e liberdade de escolha para todos na contratação de seguros no Brasil.</p>
						
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