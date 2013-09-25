<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Seguradoras</title>
		
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
			  <li class="active">Seguradoras</li>
			</ol>
			<h1>Seguradoras</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="page-with-aside with-padding institucional"> 
						
						<p>A Smartia trabalha em parceria com as principais seguradoras do Brasil. Entre as principais estão a Allianz, Cardif, Bradesco, HDI, Liberty, Maritima, Tokio Marine e Zurich. Por meio de uma ferramenta online, é possivel comparar o valor da franquia entre todas essas empresas. </p>
						<p>A cotação online garante economia do seu tempo e com isso, você pode decidir  franquia que melhor se enquadra nas suas necessidades. empresa. Para encontrar uma apólice de seguro ideal, o segurado deve levar alguns fatores em conta, entre os mais importantes é saber que o valor do carro é apenas um dos fatores que influencia o preço. Outros pontos como criminalidade na área, o índice de furto automóvel, se um modelo de carro é mais roubado que outro numa área geográfica, seu prêmio pode ser mais caro. Até mesmo a idade e o estado civil do condutor influenciam no valor final.</p>

						<h4 class="yellow mb-15">APP</h4>
						<p>Conheça o novo aplicativo ASSISTÊNCIA SMARTIA. Com ele você poderá e cadastrar e acessar os dados e informações de suas apólices de seguro, ter acesso aos principais telefones das seguradoras, abrir chamados de assistencia e entrar em contato com a central de atendimento da SMARTIA SEGUROS ONLINE. Tudo isso de forma simples direto no seu Iphone.</p>

						<h4 class="yellow mb-15">Consórcios</h4>
						<p>Para ajudar ainda mais nossos clientes a escolher serviços financeiros de forma rápida e confiável, a Smartia traz uma nova parceria para você. Trata-se da Avante.com, uma empresa de consórcios online, que conecta as instituições financeiras em só lugar. Ou seja, seu próprio website.</p>
						<p>Com a Avante você pode realizar seus sonhos sem pegar nenhuma fila de atendimento. Além disso, pesquisam as melhores taxas do mercado para apresentar a você. Com a Avante.com você tem as melhores informações para fechar o melhor negócio.</p>
					
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