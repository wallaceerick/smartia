<!DOCTYPE HTML>
	<html lang="pt-BR">
		
	<head>
		<meta charset="UTF-8">
		<title>Cotação de Seguro Auto. Simule seu seguro em várias seguradoras com a Smartia.</title>
		
		<meta name="author" content="Smartia" />
		<meta name="keywords" content="" />
		<meta name="description" content="Faça a cotação do seu seguro auto com a Smartia na hora em várias seguradoras. Veja o preço e saiba o valor do seu seguro agora." />

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
			  <li><a href="#">Produtos</a></li>
			  <li class="active">Seguro Automóvel</li>
			</ol>
			<h1>Seguro Automóvel</h1>
			<a href="#" class="big-simule-button">Simule agora seu seguro</a>
			</div>
		</div>
		
		<div class="container">	
			<span class="double-border"></span>
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<section class="page-with-aside">
						<div class="product-type">
							<img src="static/v3/images/icon-automovel.gif" alt="" />
							<h2>Seu caminhão precisa de seguro?</h2>
							<p>Hoje em dia todo cuidado é pouco. Mas a Smartia esta aqui para te dar uma mãozinha. Preencha este formulário simples e em até 24 horas nossos atendentes entraram em contato com você para apresentar uma proposta.</p>
							<br />
						</div>
						
						<form action="" method="post">
							<h3>Veículo</h3>
							<label for="modelo">Qual o modelo do veículo?</label>
							<select class="customized">
							    <option value="hide">Escolha o modelo do seu automóvel...</option>
							    <option value="option-1">Option 1</option>
							    <option value="option-2">Option 2</option>
							</select>
							
							<p><strong>Você já possui este veículo?</strong></p>
							<span class="fl-2">
								<input type="radio" id="sim" name="sim"  />
								<label for="sim">Sim</label>
							</span>
							<span class="fl-2">
								<input type="radio" id="nao" name="nao" />
								<label for="nao">Não</label>
							</span>
							
							<hr class="dotted" /> 
							
							<h3>Informações Pessoais</h3>
							<label for="nome">Nome completo:</label>
							<input type="text" name="" id="nome" name="nome" />
							<div class="row extra-padding">
								<div class="col-md-4"> 
									<label for="email">Email:</label>
									<input type="text" name="email" id="email" />
								</div>
								<div class="col-md-4"> 
									<label for="email">Telefone:</label>
									<input class="tel" type="text" name="telefone" id="telefone" placeholder="Ex: (XX) 9999-9999" />
								</div>
								<div class="col-md-4"> 
									<label for="celular">Celular:</label>
									<input class="tel" type="text" name="celular" id="celular" placeholder="Ex: (XX) 9999-9999" />
								</div> 
							</div>
							
							<div class="row extra-padding">
								<div class="col-md-2">
									<label for="estado">Estado:</label>
									<select id="estado" name="estado" class="customized">
									    <option value="hide">UF</option>
									    <option value="option-1">Option 1</option>
									    <option value="option-2">Option 2</option>
									</select>
								</div>
								<div class="col-md-8">
									<label for="cidade">Cidade:</label>
									<select id="cidade" name="cidade" class="customized">
									    <option value="hide">Selecione a cidade...</option>
									    <option value="option-1">Option 1</option>
									    <option value="option-2">Option 2</option>
									</select>
								</div> 
								<div class="col-md-8"></div>
							</div>
							
							<hr class="dotted full" />
							<button type="button">Enviar »</button>
						</form>
						
					</section>
					<aside class="aside-with-page">
						<ul class="aside-links">
							<li><a href="#">FAQ - Perguntas Frequentes</a></li>
							<li><a class="last" href="#">Dicionário do “Segurês”</a></li>
						</ul>
						<div class="aside-box">
							<img src="static/v3/images/compre-tel.gif" alt="Compre pelo Telefone" />
							<span class="tel"><strong>0800</strong> 762 7842</span>
							<span class="small">Ou também através do nosso CHAT.</span>
							<a href="#" class="chat-on">Chat On-line</a>
							<hr class="dotted" />
							<span class="small">Atendimento de segunda à sexta das 08h20 às 21h00 e Sábados das 10h às 16h.</span>
						</div>
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