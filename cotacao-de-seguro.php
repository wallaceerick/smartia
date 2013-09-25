<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Cotação de Seguro</title>
		
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
			  <li class="active">Cotação de Seguro</li>
			</ol>
			<h1>Cotação de Seguro</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="page-with-aside with-padding institucional"> 
						
						<h3 class="yellow mb-15">Calcule o valor de seguro online com segurança</h3>
						<p>O seguro é um item fundamental a ser pensado e cotado quando se adquire um carro. Com ele, seu veículo está protegido de uma série de imprevistos, os chamados “sinistros”. Ao cotar seu seguro, é elaborado um questionário para avaliar alguns fatores de risco e analisar qual é a possibilidade que o veículo tem de ser roubado ou sofrer qualquer tipo de acidente. A cotação é feita através do perfil do segurado, modelo do carro, como idade do segurado, tempo de habilitação,  se o automovel irá ficar em uma garagem ou não, se é usado periodicamente ou para passeio. A partir dessas informações, a companhia seguradora faz a projeção de quanto terá de pagar de indenização e define quanto vai cobrar do segurado.</p>
						<p>O seguro de carro oferece vários tipos de cobertura para seu carro. Quem possui um automovel sabe o quanto é importeante mante-lo segurado contra qualquer imprevisto. O seguro de automovel oferece diversos serviços, como por exemplo o de assistência 24 horas para casos de emergência, como remoção com guincho para panes e acidentes, socorro mecânico, assistência por falta de combustível, troca de pneus, serviços de chaveiro e contratação de táxi para passageiros, caso o veículo fique sem locomoção.</p>
						
						<h4 class="yellow mb-15">Serviços agregados</h4>
						<p>Na hora de fazer uma apólice procure seguradoras que ofereçam outras vantagens além do seguro, pode sair um pouco mais caro, mas oferece serviços como guincho, carro reserva e até auxílio na manutenção da casa do segurado. Outras coberturas adicionais incluem seguro para os vidros e acessórios do carro como o rádio, por exemplo. Itens que são comumente alvos dos ladrões e que não são cobertos pela apólice convencional.</p>
						
						<h4 class="yellow mb-15">Como pagar menos pelo seguro?</h4>
						<p>- Sistemas de Segurança: alarme e sistemas de rastreamento dificultam a vida dos ladrões. Como a chance de o carro ser roubado é menor quando equipado com estes dispositivos, a apólice pode ficar mais barata, já que o risco de furto é menor.</p>
						<p>- Local para deixar o carro: Se a sua casa não tem portão automático, o fato de você precisar sair do carro para abrir a porta aumenta o risco. Invista também em estacionamentos: quanto menos tempo o  carro ficar dando sopa na rua, melhor.</p>
						<p>Para simular o valor do seu seguro, você não precisa sair de casa. <br />No site da Smartia, você pode simular o valor da sua franquia em até 8 seguradoras diferentes, ao mesmo tempo.</p>

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