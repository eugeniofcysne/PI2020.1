<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo Certificado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">
    
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
    
</head>

<body>
<br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form  method="post" name="novo_certificado_form_aluno" id="novo_certificado_form_aluno" action="carregar_certificado_aluno.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="arq">Fazer o upload do Certificado: </label>
                                <input type="file" name="arquivos[]" class="form-control" id="arq">
                            </div>
                            <div class="form-group">
                                <label for="arq">Nome do Certificado: </label>
                                <input type="text" name="nomeCertificado" class="form-control" id="nomeCertificado">
                            </div>
                            <div class="form-group">
                                <label for="arq">Tipo do Certificado: </label>
                                <select name="tipoCertificado" id="tipoCertificado">
                                    <option value ="">Escolha o Tipo de Certificado
                                    <option value="Ensino">Ensino
                                    <option value="Extensão">Extensão
                                    <option value="Pesquisa">Pesquisa
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="arq">Quantidade de Horas: </label>
                                <input type="number" min="0" name="horasCertificado" class="form-control" id="horasCertificado">
                            </div>
                            <button type="submit" id="bt_carregar" class="btn carregar">Carregar</button>
                            <button type="reset" class="btn">Limpar</button>
                        </form>



                    </div>
                </div>
            </div>
        </div>
        <br>
        
    </div>
    <br>
</body>


</html><a href="index.php">Voltar para página principal</a>