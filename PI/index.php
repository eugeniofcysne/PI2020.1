<html lang="pt-br">

<head>
<title>Desofuscamento de dados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.png" sizes="32x32" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
		    	<!-- LOGO -->
		    	<a href="#" alt="betabase - home" title="Home"><img id="logo" src="img/j3.png"  ></a>

		    	<!-- SMARTPHONE -->
				<button type="button" style="margin-top:25px" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_lista" aria-expanded="false">
					<span style="background-color:#9bbd46" class="icon-bar"></span>
					<span style="background-color:#9bbd46" class="icon-bar"></span>
					<span style="background-color:#9bbd46" class="icon-bar"></span>
				</button>
		    </div>
			<div class="collapse navbar-collapse" id="menu_lista">
				<ul class="nav navbar-nav navbar-right">
					<li class="link_menu"><a href="#sobre">Sobre</a></li>
					<li class="link_menu"><a href="desofusca.php">Desofuscar</a></li>
					<li class="link_menu"><a href="contato.php">Contato</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<div id="main">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-xs-12">
				<div id="meu_carrossel" class="carousel slide" data-ride="carousel">

					<!-- PONTOS REPRESENTATIVOS DE IMAGENS -->
					<ol class="carousel-indicators">
    					<li data-target="#meu_carrossel" data-slide-to="0" class="active"></li>
    					<li data-target="#meu_carrossel" data-slide-to="1"></li>
    					<li data-target="#meu_carrossel" data-slide-to="2"></li>
  					</ol>

					<!-- IMAGENS -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/j1.jpg" class="img-thumbnail center" alt="beta-glicosidases">
							<div class="carousel-caption">
							<p>Uma placa de rede é um dispositivo de hardware responsável pela comunicação de 
								um computador em uma rede de computadores.</p>
							</div>
						</div>
					
					

					</div>

					<!-- CONTROLES -->
					<a class="left carousel-control" href="#meu_carrossel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="right carousel-control" href="#meu_carrossel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Próximo</span>
					</a>
				</div>
			</div>

			<div class="col-md-7 col-xs-12">
				<h1>Ofuscamento de dados</h1>
				<p>Neste projeto integrador foi proposto aos alunos criar um desofuscador de dados, mais
		especificamente, um desofuscador de URL usado para tornar legível logs de servidores Web que sofrem ataque de ofuscamento nas URLs.
		<br>&emsp;O desofuscador de URL deve ler a string passada como endereço (URL) e decodificar a string lida para algo legível por humanos. São usados códigos com entidades HTML, hexadecimal e código ASCII.</p>
	<p>Para acessar a proposta do PI na integra, clique aqui: <strong><a href="proposta.pdf">Proposta PI</a></p></strong>		
			</div>
		</div>
	</div>
</div>
<div id="middle">
	<div class="container">

		<div class="row"> 
			<div class="col-sm-6 col-md-4"> 
				<div class="thumbnail"> 
					

					<div class="caption"> 
						<h3>Sobre</h3> <a name="sobre"> 
						<p>O Serviço Nacional de Aprendizagem Industrial (SENAI) tem como objetivo estimular a inovação industrial por meio da educação, consultoria, pesquisa aplicada e serviços técnicos e tecnológicos que são decisivos para a competitividade das empresas do Estado e do Brasil.
		<br>&emsp;É um dos cincos maiores complexos de educação profissional do mundo e o maior da América Latina e reconhecido como modelo de educação profissional, pela qualidade dos serviços que promove e pela aposta em formatos educacionais diferenciados e inovadores, que capacitam profissionais em cursos presenciais e a distância, formando trabalhadores aptos a contribuir para o desenvolvimento da indústria. <br> Fonte: <a href="http://sc.senai.br/sobre-senai">SENAI</a></p>
						<p><a href="http://sc.senai.br/" class="btn btn-primary" role="button">Botão</a> 
					</div> 
				</div> 
			</div> 

			<div class="col-sm-6 col-md-4"> 
				<div class="thumbnail"> 
					
					<div class="caption"> 
						<h3>Contato</h3> <a name="contato"> 
						<p>Entre em contato com os desenvolvedores.</p> <p><a href="contato.php" class="btn btn-primary" role="button">Botão</a>
					</div> 
				</div> 
			</div> 
			
			<div class="col-sm-6 col-md-4"> 
				<div class="thumbnail"> 
					
					<div class="caption"> 
						<h3>Desofuscamento</h3> <a name="desofusca"> 
						<p>Entre para desofuscar os dados</p> <p><a href="desofusca.php" class="btn btn-primary" role="button">Botão</a>
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>



</body>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-2"><a href="#"><img id="logo" src="img/j3.png"></a></div>
			<div class="col-md-1 lista_footer"><a href="#sobre">Sobre</a></div>
			<div class="col-md-1 lista_footer"><a href="#desofusca">Desofuscar</a></div>
			<div class="col-md-1 lista_footer"><a href="#contato">Contato</a></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>© 2019 Desofuscador | Todos os direitos reservados. Construido por <strong>Alexandre, Eugênio e Nicolli - Academicos do curso de Análise e Desenvolvimento de Sistemas - SENAI</a>.</p>
			</div>
		</div>
	</div>
	<!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</footer>

</html>