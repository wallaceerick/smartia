<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Sobre Seguro Auto</title>
		
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
			  <li class="active">Sobre Seguro Auto</li>
			</ol>
			<h1>Sobre Seguro Auto</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="page-with-aside with-padding institucional"> 
						
						<h3 class="yellow mb-15">Sobre Seguro Auto</h3>
						<p>Existem várias formas de obter um seguro de carro mais em conta. Cotar o seguro on-line pode ser uma das alternativas, pois você consegue reunir os valores de mais de uma seguradora de uma só vez. Veículos de alto desempenho, carros velozes com motores potentes são os que tem o valor mais alto para se segurar, especialmente se o motorista for jovem ou tiver pouco tempo de carteira. Este perfil costuma ser  mais suscetível a acidentes e sinistros. Já um veículo básico garante um valor menor de franquia do seu seguro.</p>
						<p>Uma das dicas para que seu seguro auto tenha um valor reduzido, é estacionar o seu carro em uma garagem durante a noite. Isso irá evitar os ladrões, e as companhias de seguros muitas vezes podem dar um desconto em seu seguro quando seu veículo pernoita em um local fechado. Mesmo com o carro em local seguro, você deve ficar atento à segurança do seu carro, pois qualquer problema ocasionado irá aumentar o valor do seu seguro.</p>
						<p>Por fim, o mais importante é não tomar nenhuma decisão sem reunir várias cotações. Optando por um seguro compatível com suas necessidades com seu bolso, é possível conseguir boas poupanças. A melhor maneira de adquirir um seguro que se adeque às suas necessidades, é examinando as apólices e ter em mente o quanto você deseja investir. Decidido isto, você já estará seguro e esclarecido para adquirir a sua apólice de seguro de carro.</p>

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