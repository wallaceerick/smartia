<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Seguro Online</title>
		
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
			  <li><a href="#">Como Funciona</a></li> 
			  <li class="active">Seguro Online</li>
			</ol>
			<h1>Seguro Online</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="page-with-aside with-padding institucional"> 
						
						<h3 class="yellow mb-15">Como funciona cotação de seguro online</h3>
						<p class="max-size">O site SMARTIA é o primeiro site brasileiro a proporcionar uma experiência online de cotação de seguros em várias seguradoras para o ramo de automóveis. Nosso serviço é gratuito e ajuda o consumidor a poupar tempo e dinheiro simulando o cálculo do seguro, sem sair de casa.</p>
						
						<p>Veja como funciona:</p>
						<div class="bullet">
							<span class="number">1</span>
							<h4 class="yellow mb-15">Preencha o Formulário Simplificado</h4>
							<p>A proposta principal do site é a apresentação do preço estimado do seguro, em várias seguradoras, após o preenchimento de um formulário simplificado. Esse formulário possui campos comuns às seguradoras, ou seja, campos mínimos para realização de uma cotação.</p>
							<img src="static/v3/images/formulario.jpg" alt="Preencha o Formulário Simplificado" />
						</div>
						
						<div class="bullet">
							<span class="number">2</span>
							<h4 class="yellow mb-15">Compare os produtos oferecidos</h4>
							<p>O preço estimado do seu seguro é apresentado separado por tipo de produto oferecido pela Smartia. Para cada produto, selecionamos criteriosamente as condições para atender às principais necessidades de quem procura um seguro de automóvel.</p>
							<img src="static/v3/images/compare-1.jpg" alt="Compare os produtos oferecidos" />
							<p>Você pode analisar o que a Smartia selecionou para você em cada um dos produtos, independente da seguradora, através da opção, “veja a diferença entre os produtos”.</p>
							<img src="static/v3/images/compare-2.jpg" alt="Compare os produtos oferecidos" />
							<p>Você também pode analisar e comparar o conteúdo de cada produto da sua seguradora preferida através da opção, “comparar seguradoras”.</p>
							<img src="static/v3/images/compare-3.jpg" alt="Compare os produtos oferecidos" />
						</div>
						
						<div class="bullet">
							<span class="number">3</span>
							<h4 class="yellow mb-15">Personalize</h4>
							<p>Caso deseje, você pode clicar nas abas das coberturas, personalizá-las e recalcular seu seguro.</p> 
							<img src="static/v3/images/personalize.jpg" alt="Personalize" />
						</div> 
						
						<div class="bullet">
							<span class="number">4</span>
							<h4 class="yellow mb-15">Contrate</h4>
							<p>Agora é só escolher a seguradora com os melhores benefícios e contratar. Nossos atendentes entrarão em contato com você para confirmar a contratação e complementar qualquer informação ainda necessária.</p> 
							<img src="static/v3/images/contrate.jpg" alt="Contrate" />
						</div>  
						
					</section>
					
					<aside class="aside-with-page">
						<ul class="aside-links">
							<li><a class="active" href="seguro-online.php">Seguro Online</a></li>
							<li><a href="acionando-seu-seguro.php">Acionando seu seguro</a></li>
							<li><a href="#">FAQ - Perguntas Frequentes</a></li>
							<li><a class="last" href="dicionario-de-segures.php">Dicionário do “Segurês”</a></li>
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