<html lang="pt-br">

<head>
<title>Ofoscamento de dados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.png" sizes="32x32" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<body>
<br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" name="enviar_form" id="enviar_form" enctype="multipart/form-data" target="iframeUpload">
                            <div class="form-group">
                                <label for="arq">Escolha um arquivo para leitura: </label>
                                <input type="file" name="arquivos[]" class="form-control" id="arq">
                            </div>
                            <button type="submit" pagina= "ler_arquivo_percent.php" id="bt_carregar_percent" class="btn carregar">Carregar Percent</button>
                            <button type="submit" pagina= "ler_arquivo_char.php" id="bt_carregar_char" class="btn carregar">Carregar Char</button>
                            <button type="submit" pagina= "ler_arquivo_ampersan.php" id="bt_carregar_ampersan" class="btn carregar">Carregar Ampersan</button>
                            <button type="reset" class="btn">Limpar</button>
                        </form>
                        
                        <iframe name="iframeUpload" id="iframeUpload"></iframe>



                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">Digite seu texto ofuscado no campo abaixo: </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3 input-group-sm">
                        <input type="text" name="ins_texto" class="form-control" id="ins_texto" placeholder="Digite seu texto aqui">
                        <br>
                        <button type="button" id="btn_percent" class="btn">Carregar Percent</button>
                        <button type="button" id="btn_ampersan" class="btn">Carregar Ampersan</button>
                        <button type="button" id="btn_char" class="btn">Carregar Char</button>
                        <span id="result"></span>
                    </div>
                </form>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">Texto desofuscado</div>
                            <div class="card-body">
                                <div id="dv_original"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>
</body>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-2"><a href="#"><img id="logo" src="img/logo.svg"></a></div>
			<div class="col-md-1 lista_footer"><a href="index.php">Voltar</a></div>
			
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