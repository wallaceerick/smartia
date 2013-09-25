<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Simulação de Seguros</title>
		
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
			  <li class="active">Simulação de Seguros</li>
			</ol>
			<h1>Simulação de Seguros</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="page-with-aside with-padding institucional"> 
						
						<h3 class="yellow big mb-15">Simulação</h3>
						<p>Umas das melhores vantagens de fazer uma cotação online é o fato de que você pode analisar e comparar ao mesmo tempo os preços das melhores seguradoras do país, que fazem suas ofertas abertamente em tempo real.</p>
						
						<p>Proteja seu automóvel em 5 minutos! Você pode economizar tempo e dinheiro, pois pode cotar várias possibilidades, sem sair da comodidade da sua casa, e sem precisar de um intermediário. Basta procurar através de ferramentas de busca, e logo você terá uma serie de opções para cotar o seguro do seu automóvel.</p>	
						
						<p>Você quer contratar um seguro para seu carro, mas não sabe por onde começar?<br />
						Existem várias empresas que, com o avanço da internet oferecem esse tipo de serviço online.<br />
						Mas antes de contratar um seguro, sempre é recomendado pesquisar e analisar todas as opções de serviço, entre elas, confirmar supostas promoções e checar serviços adicionais, por que você pode conseguir reduzir o valor final do seguro e também de acordo com o perfil do condutor do carro ou mesmo se automóvel será estacionado na rua ou não podem influir no valor final do seguro. <br />
						A Smartia possui um simulador online que permite que você cote seu seguro em até oito seguradoras diferentes. Simule seu calculo!
						</p>
						
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