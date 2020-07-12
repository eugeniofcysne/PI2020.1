<?php
session_start();
include_once("conexao.php");
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

<h1>Processar Certificados</h1>
<?php       
        
        $result_certificados = 
        "select 
        a1.*,
        (
            select 
            a2.nome
            from
            usuario as a2
            where
            a2.cod_usuario = a1.usuario_cod_usuario
        )  as nome_usuario 
        from
        certificado as a1
        where a1.cod_certificado in 
            (
            select
            t1.cod_certificado from
                (
                select 
                certificado_cod_certificado as cod_certificado,
                max(enum_status_posterior) as max_status
                from alteracao_status_certificado
                group by certificado_cod_certificado
                ) as t1
            where t1.max_status=1
                );";

		$resultado_usuarios = mysqli_query($conn, $result_certificados);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
            echo "Nome do Aluno: " . $row_usuario['nome_usuario'] . "<br>";
            echo "Data: " . $row_usuario['data_criacao'] . "<br>";
            echo "Nome do Certificado: " . $row_usuario['nome_certificado'] . "<br>";
            $cod_certificado=$row_usuario['cod_certificado'];
            echo "Horas: " . $row_usuario['horas_certificado'] . "<br>";
            echo "Tipo de certificado: " . $row_usuario['tipo_certificado'] . "<br>";
            echo "
            <a style = \"margin-right: 10px; margin-left: 2px;\" href =\"aprova_certificado_secretaria.php?cod_certificado=" . $cod_certificado . "\" class=\"btn btn-primary\" role=\"button\" >
                Aprovar Certificado
            </a>           
            ";
            echo "
            <a style = \"margin-right: 10px; margin-left: 2px;\" href =\"reprova_certificado_secretaria.php?cod_certificado=" . $cod_certificado . "\" class=\"btn btn-primary\" role=\"button\" >
                Reprovar Certificado
            </a>           
            ";
        
        }
        ?>
        <br>
        <a href="index.php">Voltar para página principal</a>
</body>


</html>