
<?php 
include_once("conexao.php");
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location:index.php');
}
 
$nome = $_SESSION['nome_usuario'];
$cod_usuario =  $_SESSION['cod_usuario'] ;
?>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desofuscamento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        .topnav {
            background-color: #009785;
            overflow: hidden;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #009785;
            color: black;
        }

        .topnav a.active {
            background-color: #009785;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        iframe {
            width: 100%;
            height: 100px;
        }

        .jumbotron {
            padding: 0px;

        }

        .footer {
            background-color: #009785;
            overflow: hidden;
            height: 50px;
            bottom: 0;
            width: 100%;
        }
    </style>
    <div class="topnav" id="myTopnav">
    <img src="img/senai.png" aling= "left">
       
        
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        < script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity = "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin = "anonymous" >
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>

    </script>
</head>
<body>

<h1>
    <?php
        echo "Relatório Geral $nome"
    ?>
</h1>
<?php
		
        $result_relatorio = "select a1.*,
        (
            select 
            a3.descricao_enum_status 
            from enum_status as a3 
            where cod_enum_status = 
            (
                select 
                max(a2.enum_status_posterior) 
                from alteracao_status_certificado  as a2 
                where a1.cod_certificado = certificado_cod_certificado
            )
        ) as status
        from
        certificado as a1
        where a1.usuario_cod_usuario =$cod_usuario";
		$resultado_relatorio = mysqli_query($conn, $result_relatorio);
		while($row_relatorio = mysqli_fetch_assoc($resultado_relatorio)) {
        echo "Nome do Certificado: " . $row_relatorio['nome_certificado'] . "<br>";
        echo "Data de Criação: " . $row_relatorio['data_criacao'] . "<br>";
        echo "Tipo de Certificado: " . $row_relatorio['tipo_certificado'] . "<br>";
        echo "Horas: " . $row_relatorio['horas_certificado'] . "<br>";
        echo "Status: " . $row_relatorio['status'] . "<br><hr>";
        
        }
?>

<a href="index.php">Voltar para página principal<br></a>
<a href="aluno.php">Voltar para página do Aluno</a>

</body>


</html>