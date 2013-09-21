<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Seguro Motocicleta</title>
		
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
			  <li class="active">Seguro Motocicleta</li>
			</ol>
			<h1>Seguro Motocicleta</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="page-sharer">
				<div class="google">
					<g:plusone size="medium" annotation="none"></g:plusone>
				</div>
				<div class="facebook">
					<div class="fb-wrapper">
						<div class="fb-like" data-href="http://developers.facebook.com/docs/reference/plugins/like" data-width="30" data-show-faces="false" data-send="false" data-action="like" data-layout="button_count" data-font="tahoma"></div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="single-page">
						<span class="image-app">
							<span class="left"></span>
							<span class="right"></span>
							<span class="text">
								<p>Tenha os <strong>dados da sua apólice</strong> na palma da mão!</p>
								<p>Assistência direta com a sua <strong>seguradora e seus serviços</strong>.</p>
								<p>Contato direto e fácil com a  nossa <strong>Central de Atendimento</strong>.</p>
							</span>
							<a href="#" class="avaliable">Disponível na AppStore</a>
						</span>
						
						<div class="text-content">
							<p>Conheça o aplicativo ASSISTÊNCIA SMARTIA. Com ele você poderá cadastrar e acessar os dados e informações de suas apólices de seguro, ter acesso aos principais telefones das seguradoras, abrir chamados de assistência e entrar em contato com a Central de Atendimento da Smartia Seguros Online. Tudo isso de forma fácil e simples direto em seu Iphone.</p>
						</div>
						
					</section>
				</div>
			</div>
		</div>
		
		<?php include('includes/footer.php'); ?>
		<?php include('includes/modal.php'); ?>
		
		<?php include('includes/scripts.php'); ?>
		
	</body>
</html>