<html lang="pt-br">

<head>
<?php 
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location:index.php');
}
 
$nome = $_SESSION['nome_usuario'];
?>
<title>Aluno</title>
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
					<a href="index.php" alt="betabase - home" title="Home"><img id="logo" src="img/senai.png"  ></a>
				</div>
			</div>
		</nav>
	</header>
	<div id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>
					<?php
					echo" Bem vindo $nome";
					?>
					</h1><a name="inicio"> 
					<p>&emsp;Escolha o relatório desejado.	
				</div>
			</div>
		</div>
	</div>
	<div id="middle">
		<div class="container">		
			<div class="row">
			

				<div class="col-sm-3">
                    <a href="relatorio_geral.php" class="btn btn-primary" role="button">Relatório Geral</a>
				</div> 
                <div class="col-sm-3">
                    <a href="relatorio_ensino.php" class="btn btn-primary" role="button">Relatório Ensino</a>
				</div>
                <div class="col-sm-3">
                    <a href="relatorio_pesquisa.php" class="btn btn-primary" role="button">Relatório Pesquisa</a>
				</div> 
                <div class="col-sm-3">
                    <a href="relatorio_extensao.php" class="btn btn-primary" role="button">Relatório Extensão</a>
				</div> 								
				
			</div>			
		</div>
	</div>
	</html><a href="index.php">Voltar para página principal</a><br>
<a href="aluno.php">Voltar para página Aluno</a>
</body>
<footer>
	<div class="container footer" style="width: 100%">
		<div class="row">
			<div class="col-md-12">
				<p>© 2020 Controle de Certificados | Todos os direitos reservados. Construido por <strong>Alexandre e Eugênio - Academicos do curso de Análise e Desenvolvimento de Sistemas - SENAI</a>.</p>
			</div>
		</div>
	</div>
	<!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</footer>

</html>