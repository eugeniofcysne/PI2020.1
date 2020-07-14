<html lang="pt-br">

<head>
<?php 
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location:index.php');
}


$cod_usuario=$_SESSION['cod_usuario'];
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
					<p>&emsp;Bem-vindo(a) ao módulo de Aluno. Neste ambiente, você pode cadastrar um novo certificado, Solicitar emissão de certificado, gerar relatório e acompanhar certificados em andamento.	
					<?php
					include_once("conexao.php");
					$result_relatorio="
					select 
					sum(a1.horas_certificado) as horas
					from certificado as a1
					inner join 
						(
						select certificado_cod_certificado as cod_certificado from alteracao_status_certificado where enum_status_posterior=3
						) as a2    
					on a1.cod_certificado = a2.cod_certificado
					where usuario_cod_usuario =$cod_usuario;";
					
					$resultado_relatorio = mysqli_query($conn, $result_relatorio);
					while($row_relatorio = mysqli_fetch_assoc($resultado_relatorio)) {
					echo " Quantidade de horas aprovadas: " . $row_relatorio['horas'] . " de 60" . "<br>";
					
					
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<div id="middle">
		<div class="container">		
			<div class="row">
			

				<div class="col-sm-3">
                    <a href="novo_certificado.php" class="btn btn-primary" role="button">Novo Certificado</a>
				</div> 
                <!--<div class="col-sm-3">
                    <a href="solicitarCertificado.php" class="btn btn-primary" role="button">Solicitar Certificado</a>
				</div> -->
                <div class="col-sm-3">
                    <a href="gerar_relatorio.php" class="btn btn-primary" role="button">Gerar Relatório</a>
				</div> 
                <div class="col-sm-3">
                    <a href="relatorio_andamento.php" class="btn btn-primary" role="button">Certificados em Andamento</a>
				</div> 								
				
			</div>			
		</div>
	</div>
</body>
<footer>
	<div class="container footer" style="width: 100%">
		<div class="row">
			<div class="col-md-12">
				<p>© 2019 Controle de Certificados | Todos os direitos reservados. Construido por <strong>Alexandre e Eugênio - Academicos do curso de Análise e Desenvolvimento de Sistemas - SENAI</a>.</p>
			</div>
		</div>
	</div>
	<!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</footer>

</html>