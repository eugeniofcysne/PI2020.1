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
<br/>
        <h2>Bem vindo a tela da Coordenação!</h2>
        <br/>
        <br/>
        <div id="middle">
	<div class="container">		
		<div class="row">
        <div class="col-sm-4"> 
				<div class="thumbnail"> 
					
					<div class="caption"> 
						<a name="coord1"> 
						<h4>Criar Certificados de Eventos</h4> <p><a href="desofusca.php" class="btn btn-primary" role="button">Criar</a>
					</div> 
				</div> 
			</div> 
            
            <div class="col-sm-4"> 
				<div class="thumbnail"> 
					<div class="caption"> 
						<h4>Processar Certificados</h4> <p><a href="processar.php" class="btn btn-primary" role="button">Processar</a>
					</div> 
				</div> 
			</div> 

            <div class="col-sm-4"> 
				<div class="thumbnail"> 
					<div class="caption"> 
						<h4>Verificar Documentação do MEC</h4> <p><a href="regulamento.pdf" class="btn btn-primary" role="button">Verificar</a>
					</div> 
				</div> 
			</div> 
        </div>
    </div>
</body>


</html><a href="index.php">Voltar para página principal</a>