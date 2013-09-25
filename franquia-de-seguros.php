<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Franquia de Seguros</title>
		
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
			  <li class="active">Franquia de Seguros</li>
			</ol>
			<h1>Franquia de Seguros</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="page-with-aside with-padding institucional"> 
						
						<h3 class="yellow mb-15">Franquias</h3>
						<p>Ao contratar seu seguro, automaticamente é oferecido uma determinada quantidade de parcelas. Na linguagem do seguro, essas parcelas são chamadas de franquia, que nada mais é que participação obrigatória do segurado em caso de sinistro com seu veículo. </p>
						
						<h4 class="yellow mb-15">Franquia Normal</h4>
						<p>É aquela em que o segurado participa do prejuízo, em caso de sinistro, com um valor estabelecido previamente pela seguradora, de acordo com o modelo do veículo. </p>	
						
						<h4 class="yellow mb-15">Franquia Reduzida</h4>
						<p>É aquela em que o segurado participa do prejuízo, em caso de sinistro, com um valor 50% menor do que aquele estabelecido pela seguradora como franquia normal.</p>	
					
						<h4 class="yellow mb-15">Franquia Majorada</h4>
						<p>É aquele em que o segurado participa do prejuízo, em caso de sinistro, com um valor 100% maior do que aquele estabelecido pela seguradora como franquia normal.</p>
						
						<h4 class="yellow mb-15">Observações</h4>
						<p>
						- O segurado participará com o valor da franquia se, em caso de sinistro, for constatada perda parcial. Nos casos de perda total por roubo, furto, incêndio ou colisão que ultrapasse o valor médio de mercado do veículo em 75%, o segurado fica isento dessa responsabilidade. <br />
						- Não existe franquia para a garantia de Responsabilidade Civil Facultativa (RCF). <br />
						- Os valores comerciais do seguro oneram de acordo com o valor da franquia contratada. Se, por exemplo, for contratada a franquia reduzida, o valor final do seguro sofrerá um aumento. Se for contratada a franquia majorada, o valor final do seguro sofrerá uma redução.
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