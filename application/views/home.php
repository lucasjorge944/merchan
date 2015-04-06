<?php		
	header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Home</title>
		<meta name="description" content="">
		<meta name="author" content="ckt.lucas">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="icon.png">
		<link rel="apple-touch-icon" href="icon.png">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?php echo base_url('includes/bootstrap/css/bootstrap.css'); ?>">
		<!-- Smart Menu -->
		<link href="<?php echo base_url('includes/bootstrap/smartmenu/jquery.smartmenus.bootstrap.css'); ?>" rel="stylesheet">
		<!-- Estilos -->
		<link rel="stylesheet" href="<?php echo base_url('includes/css/estilos.css'); ?>">
	</head>
	<body onscroll="functionMenu()">
		<div class="topBar">
			<ul>
				<li><a><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  comercial@mcode.com.br</a></li>
				<li><a href="">FAQ</a></li>
				<li><a target="_blank" href="http://dev.timob.com.br/merchan/"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Área Restrita</a></li>
			</ul>
		</div>
		<div class="menuBar">
			<div class="row">
			  <div class="col-md-12">
			  	<a href="<?php echo base_url(); ?>"><img id="imgLogoFull" src="<?php echo base_url('includes/imgs/app/logo.png'); ?>" alt="logo"></a>
			  	<!-- Static navbar -->
			  	<div id="conteudoMenu" class="navbar navbar-default" role="navigation">
			  		<div class="navbar-header">
			  			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			  				<span class="sr-only">Toggle navigation</span>
			  				<span class="icon-bar"></span>
			  				<span class="icon-bar"></span>
			  				<span class="icon-bar"></span>
			  			</button>
			  			<a id="menuLogo" class="navbar-brand" href="<?php echo base_url(); ?>">
			  				<img src="<?php echo base_url('includes/imgs/app/logo.png'); ?>" style="width: 30px; margin:0; padding:0;">
			  			 </a>
			  		</div>
			  		<div class="navbar-collapse collapse">
			  			<!-- Left nav -->
			  			<ul class="nav navbar-nav">
			  				<li><a id="textoLink1" onclick="scrollToDiv()"><span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span> M-CODE</a>
			  					<ul class="dropdown-menu">
					            	<li><a class="mcode"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> O QUE É?</a></li>
					            	<li><a class="controla"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> O QUE CONTROLAMOS?</a></li>
					            	<li><a class="empresa"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> A EMPRESA</a></li>
					            </ul>
			  				</li>
			  				<li><a style="display: none;" id="textoLink" href="#">ERRO!</a></li>
			  				<li><a id="textoLink" class="funciona"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> COMO FUNCIONA</a></li>
			  				<li><a id="textoLink" class="vantagens"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> VANTAGENS</a></li>
			  				<li><a id="textoLink" class="clientes"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> CLIENTES</a></li>
			  				<li><a id="textoLink" class="fale"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> FALE CONOSCO</a></li>
			  				<li><a id="textoLink" class="contato"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> CONTATO</a></li>
			  			</ul>
			  		</div><!--/.nav-collapse -->
			  	</div>
			  </div>
			</div>
		</div>
		<div class="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="<?php echo base_url('includes/imgs/slider/banner1.jpg'); ?>" alt="...">
					  <div class="carousel-caption">
					    <h3></h3>
					    <p></p>
					  </div>
					</div>
					<div class="item">
					  <img src="<?php echo base_url('includes/imgs/slider/banner2.jpg'); ?>" alt="...">
					  <div class="carousel-caption">
					    <h3></h3>
					    <p></p>
					  </div>
					</div>
					<div class="item">
					  <img src="<?php echo base_url('includes/imgs/slider/banner3.jpg'); ?>" alt="...">
					  <div class="carousel-caption">
					    <h3></h3>
					    <p></p>
					  </div>
					</div>
					<div class="item">
					  <img src="<?php echo base_url('includes/imgs/slider/banner4.jpg'); ?>" alt="...">
					  <div class="carousel-caption">
					    <h3></h3>
					    <p></p>
					  </div>
					</div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div id="mcode" class="item1">
			<div class="row">
				<div class="col-md-4">
					<img id="imgmcode" src="<?php echo base_url('includes/imgs/app/mcode.jpg'); ?>" alt="mcode">
				</div>
				<div class="col-md-8">
					<h2><strong>MOBILE CODE</strong></h2>
				  	<h4>
				  		As soluções de MOBILE CODE da M-CODE promovem a gestão e controle do seu negócio. 
				  	</h4>
				  	<h4 style="margin-top: 50px;">
				  		Através do nosso moderno software instalado em um smartphone ou tablet, promovemos leitura de códigos de barras pré-customizados gerando informações em tempo real para seu negócio. 

				  	</h4>
				</div>
			</div>
			<div id="codigos" class="row">
				<div class="col-md-3">
					<img id="imgean" src="<?php echo base_url('includes/imgs/app/ean.png'); ?>">
				</div>
				<div class="col-md-3">
					<h3><strong>CODIGO EAN</strong></h3>
					<h4>EAN significa Número de Artigo Internacional. Este sistema de código de barras de 13 dígitos começou na Europa e agora é utilizado em todos os países do mundo, exceto EUA e Canadá.</h4>

					<h4>Em resumo, o EAN é um código de 13 dígitos representado por barras escaneáveis, exclusivo para seu produto.</h4>
				</div>
				<div class="col-md-3">
					<img id="imgqrcode" src="<?php echo base_url('includes/imgs/app/qrcode.jpg'); ?>">
				</div>
				<div class="col-md-3">
					<h3><strong>QR CODE</strong></h3>
					<h4>Significa "Quick Response", isto é, código de resposta rápida.</h4>

					<h4>Este modelo armazena ate 7.089 números ou 4.296 alfanuméricos (letras ou números). Incluindo endereços completos, informações sobre o produto no estoque e etc.</h4>
				</div>
			</div>			
		</div>
		<div id="funciona" class="item2">
			<div class="row">
				<div class="col-md-12">
					<div id="carousel-id" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-id" data-slide-to="0" class=""></li>
							<li data-target="#carousel-id" data-slide-to="1" class=""></li>
							<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img src="<?php echo base_url('includes/imgs/app/passo1.png'); ?>">
							</div>
							<div class="item">
								<img src="<?php echo base_url('includes/imgs/app/passo2.png'); ?>">
							</div>
							<div class="item">
								<img src="<?php echo base_url('includes/imgs/app/passo3.png'); ?>">
							</div>
						</div>
						<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
			</div>
		</div>
		<div id="vantagens" class="item3">
			<h2>
				<strong>VANTAGENS PARA O USUÁRIO: </strong>
			</h2>
			<div class="row">
			  <div class="col-md-4" style="margin-top: 50px;">
			  	<h5><strong>ACOMPANHE TODO CICLO MATERIAL DE MERCHAN</strong></h5>
				<center><div class="imgContainer"><img src="<?php echo base_url('includes/imgs/app/vantagem1.png'); ?>" alt="..."></div></center>
				<h6>Acompanhe todo ciclo de vida útil do seu material de merchandising: confecção, distribuição, positivação e até a perda do material.
				</h6>			
			  </div>
			  <div class="col-md-4" style="margin-top: 50px;">
			  	<h5><strong>CONTROLE PONTOS DE VENDA</strong></h5>
				<center><div class="imgContainer"><img src="<?php echo base_url('includes/imgs/app/pdv.png'); ?>" alt="..." ></div></center>
				<h6>Controle seus pontos de venda. Saiba quais estão positivado, qual o tipo de material positivado. 
				</h6>
			  </div>
			  <div class="col-md-4" style="margin-top: 50px;">
			  	<h5><strong>CONTROLE DE EQUIPE</strong></h5>
			  	<center><div class="imgContainer"><img src="<?php echo base_url('includes/imgs/app/equipe.png'); ?>" alt="..."></div></center>
				<h6>Acompanhe em tempo real a produtividade da sua equipe.
				</h6>
			  </div>
			</div>
			<div class="row">
			  <div class="col-md-4" style="margin-top: 50px;">
			  	<h5><strong>DADOS DE CONTROLE</strong></h5>
				<center><div class="imgContainer"><img src="<?php echo base_url('includes/imgs/app/infos.png'); ?>" alt="..."></div></center>
				<h6>Informações otimizadas e em tempo real de toda operação.
				</h6>			
			  </div>
			  <div class="col-md-4" style="margin-top: 50px;">
			  	<h5><strong>DASHBOARDS CUSTOMIZADOS</strong></h5>
				<center><div class="imgContainer"><img style="margin-top: 30px;" src="<?php echo base_url('includes/imgs/app/dashboard.png'); ?>" alt="..."></div></center>
				<h6>Controle seus pontos de venda. Saiba quais estão positivado, qual o tipo de material positivado em cada um dos PDV’s. 
				</h6>
			  </div>
			  <div class="col-md-4" style="margin-top: 50px;">
			  	<h5><strong>TEMPO DE VIDA ÚTIL</strong></h5>
			  	<center><div class="imgContainer"><img src="<?php echo base_url('includes/imgs/app/checkin.png'); ?>" alt="..."></div></center>
				<h6>Através da função check-in / check out saiba qual o tempo de vida útil do seu material. 
				</h6>
			  </div>
			</div>
		</div>
		<div id="controla" class="item4">
			<div id="textoControlar">
				<h2 style="background-color: black; color:white;border-radius:20px; padding-left:10px;">
					<strong>O QUE CONTROLAR COM m-code: </strong>
				</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<center>
						<img src="<?php echo base_url('includes/imgs/app/vantagem1.png'); ?>">
						<h3>MATERIAL DE MERCHANDISING</h3>
					</center>
				</div>
				<div class="col-md-4">
					<center>
						<img src="<?php echo base_url('includes/imgs/app/caixa.png'); ?>">
						<h3>PRODUTOS <br>VARIADOS</h3>
					</center>
				</div>
				<div class="col-md-4">
					<center>
						<img src="<?php echo base_url('includes/imgs/app/estoques.png'); ?>">
						<h3>ESTOQUE <br>DIVERSOS</h3>
					</center>
				</div>
			</div>
		</div>
		<div id="clientes" class="item5">
			<h2><strong>QUEM USA M-CODE?</strong></h2>
			<center>
				<div class="row">
					<div class="col-md-6">
						<img id="imgPop" src="<?php echo base_url('includes/imgs/app/pop.png'); ?>">
					</div>
					<div class="col-md-6">
						<img id="imgTimob" src="<?php echo base_url('includes/imgs/app/logotimob.png'); ?>">
					</div>
				</div>
			</center>
		</div>
		<div id="empresa" class="item6">
			<h2><strong>M-CODE</strong></h2>
			<div class="row">
				<div class="col-md-10">
					<h3>A M-CODE é a empresa brasileira mais especializada em soluções de automação para leitura de códigos de barra inteligentes.
					</h3>
					<h3>Com sede em Belo Horizonte e unidades de negócio no Rio de Janeiro e em São Paulo a empresa atua em todo Brasil! 
					</h3>
					<h3><strong>VENHA TOMAR UM CAFÉ CONOSCO E SURPREENDA-SE!</strong></h3>
				</div>
				<div class="col-md-2">
					<center><img src="<?php echo base_url('includes/imgs/app/logo.png'); ?>"></center>
				</div>
			</div>
		</div>
		<div id="fale" class="item7">
			<h2><strong>ENTÃO, VAMOS TOMAR UM CAFÉ?</strong></h2>
			<div class="row">
				<div class="col-md-12">
					<h4>Gostou de nossa solução? Tem alguma dúvida ou necessita de um projeto sob medida? Entre em contato e lhe retornaremos para esclarecer dúvidas ou agendar uma visita.</h4>

					<div class="row">
						<div class="col-md-3"><h3><strong><small>FALE</small> <p>CONOSCO</p></strong></h3></div>
						<div class="col-md-9"><img src="<?php echo base_url('includes/imgs/app/cafe.png'); ?>"></div>
					</div>

					<form>
					  <div class="form-group">
					    <input type="text" class="form-control" id="txtNome" placeholder="Nome...">
					  </div>
					  <div class="form-group"> 
					    <input type="email" class="form-control" id="txtEmail" placeholder="Email...">
					  </div>
					  <div class="form-group"> 
					    <input type="text" class="form-control" id="txtAssunto" placeholder="Assunto...">
					  </div>
					  <div class="form-group"> 
					    <textarea type="text" class="form-control" id="txtMensagem" placeholder="Digite sua mensagem..."></textarea>
					  </div>
					  <button type="button" class="btn btn-default btn-success btn-block" data-toggle="modal" data-target="#myModalManuntencao">Enviar</button>
					</form>
				</div>
			</div>
		</div>
		<div id="contato" class="item8">
			<div class="row">
				<div class="col-md-9">
					<img src="<?php echo base_url('includes/imgs/app/matriz.png'); ?>">
				</div>
				<div class="col-md-3">
					<h3><strong>MATRIZ:</strong></h3>
					<h4>
						Rua Alvares Cabral, 381 – sala 1101 / 1103 – Lourdes
						Belo Horizonte / MG
					</h4>
					<h4>(31) 3140-0033</h4>
				</div>
			</div>			
		</div>
		<div class="item9">
			<div class="row">
				<div class="col-md-6"><h5>Copyright © 2015 m-code. Todos Direitos Reservados</h5></div>
				<div class="col-md-6">
					<a onclick="scrollWin()" style="cursor: pointer;"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> Topo</a>
				</div>
			</div>					
		</div>
	</body>
</html>
	<!-- jQuery -->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo base_url('includes/js/responsive.js'); ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('includes/bootstrap/js/bootstrap.js'); ?>"></script>
	<!-- Startmenu -->
	<script type="text/javascript" src="<?php echo base_url('includes/bootstrap/smartmenu/jquery.smartmenus.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('includes/bootstrap/smartmenu/jquery.smartmenus.bootstrap.js'); ?>"></script>
<?php require_once("includes/modal/modal.php"); ?>