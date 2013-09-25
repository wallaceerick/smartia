<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Valor de Seguro</title>
		
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
			  <li class="active">Valor de Seguro</li>
			</ol>
			<h1>Valor de Seguro</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="page-with-aside with-padding institucional"> 
						
						<h3 class="yellow big mb-15">Sobre o Valor de Seguro</h3>
						<p>O cálculo do valor do seguro envolve informações sobre o veículo, a região de circulação, as características de uso do veículo, seus condutores e sua proteção. Em relação ao carro, a seguradora verifica se ele possui um índice elevado de roubo. Geralmente, os modelos mais caros, os mais vendidos e os esportivos são os mais visados pelos bandidos.</p>
						<p>É importante saber se as peças de reposição são achadas com facilidade e com qual preço. Se for alto, é um ponto negativo para o carro. Ainda é verificado o preço de revenda, para saber se, em caso de recuperação do veículo será possível compensar o valor pago por ele pela seguradora. O perfil do condutor também é um fator relevante no cálculo. Cotar um seguro de automóvel é algo simples, porém cada seguro é ajustado exatamente à necessidade de cada motorista.</p>
						<p>Diversos fatores servem de influência para o valor final da franquia, como por exemplo, algumas atitudes do proprietário e cuidados com a manutenção resultam em desconto na hora de contratar ou renovar a apólice. A apólice tem como base, principalmente, o chamado "perfil de risco" do segurado. As mulheres são as mais beneficiadas nesse quesito. Quanto mais velha, menor será o valor. Se tiver filhos, menor ainda. </p>
						<p>Do outro lado da balança estão os motoristas jovens de até 25 anos. Por serem inexperientes, são os que apresentam maior risco de acidente. A região da residência é outro item analisado. <br /> Se o proprietário vive em um local que registra muitos casos de roubos ou furto de carro, o preço será alterado para cima. A profissão só interfere no caso de taxista ou que trabalhe na rua, sempre com o carro.</p>
						
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