<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Trabalhe na Smartia Seguros Online?</title>
		
		<meta name="author" content="Smartia" />
		<meta name="keywords" content="" />
		<meta name="description" content="Quer trabalhar na Smartia Seguros Online? Acesse este link e preencha nosso formulário que em breve entraremos em contato." />

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
			  <li><a href="#">Contato</a></li>
			  <li class="active">Trabalhe Conosco</li>
			</ol>
			<h1>Trabalhe Conosco</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="page-with-aside with-padding"> 
						
						<form action="" method="post">
							
							<label for="nome">Nome completo:</label>
							<input type="text" name="nome" id="nome" />
							
							<div class="row extra-padding">
								<div class="col-md-6">
									<label for="email">Email:</label>
									<input type="text" name="email" id="email" />
								</div>
								<div class="col-md-6">
									<label for="telefone">Telefone:</label>
									<input class="tel" type="text" name="telefone" id="telefone" placeholder="Ex: (XX) 9999-9999" />
								</div>
							</div>
							
							<br />
							
							<label for="mensagem">Mensagem:</label>
							<textarea id="mensagem" name="mensagem"></textarea> 
							
							<div class="row gray-backgound for-upload">
								<label for="file">Envio de Currículo:</label> 
								<input type="file" id="file" name="myfiles[]" multiple value="home.jpg" />
							</div>
							
							<div class="row gray-backgound">
								<div class="col-md-9 align-right small-p p-with-margin">
									<span class="small-p ">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque. <br />
										Nulla lacinia iaculis nulla non ptulvinar.Lorem ipsum dolor sit amet, consectetur adipiscing. <br />
										Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non ptulvinar.
									</span>
								</div>
								<div class="col-md-3 no-padding-right">
									<button type="button" class="with-margin-2">Enviar »</button>
								</div>
							</div> 
							
						</form>
						
						
					</section>
					<aside class="aside-with-page">
						<ul class="aside-links">
							<li><a href="fale-conosco.php">Fale Conosco</a></li>
							<li><a class="active last" href="trabalhe-conosco.php">Trabalhe Conosco</a></li>
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