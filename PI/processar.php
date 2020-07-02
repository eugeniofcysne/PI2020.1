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
<br>
<input type="text" name="nome" placeholder="Nome">
<input type="text" name="data" placeholder="Data"> <a class="btn btn-primary" role="button">Pesquisar</a>
    <br>
    <?php
    //https://pt.stackoverflow.com/questions/21073/criar-tabela-html-e-mostrar-dados-usando-php
    //variável para receber o código da tabela
    $tabela = '<table border="1">';//abre table
    $tabela .='<thead>';//abre cabeçalho
    $tabela .= '<tr>';//abre uma linha
    $tabela .= '<th>NomeAluno</th>'; // colunas do cabeçalho
    $tabela .= '<th>Matricula</th>';
    $tabela .= '<th>DataEnvio</th>';
    $tabela .= '<th>Arquivo</th>';
    $tabela .= '</tr>';//fecha linha
    $tabela .='</thead>'; //fecha cabeçalho
    $tabela .='<tbody>';//abre corpo da tabela
    /*Se você tiver um loop para exibir os dados ele deve ficar aqui*/
    $tabela .= '<tr>'; // abre uma linha
    $tabela .= '<td></td>'; // coluna NomeAluno
    $tabela .= '<td>'.$exibe['Matricula'].'</td>'; //coluna Matricula
    $tabela .= '<td>'.$exibe['DataEnvio'].'</td>'; // coluna DataEnvio
    $tabela .= '<td><a href="xxx.php?id='.$exibe['id'].'">Ver arquivo</a></td>';
    $tabela .= '</tr>'; // fecha linha
    /*loop deve terminar aqui*/
    $tabela .='</tbody>'; //fecha corpo
    $tabela .= '</table>';//fecha tabela
    
    echo $tabela; // imprime 
    if(mysql_num_rows($resultado)>0) {
        echo "<table border='1'>"; //Criamos a tabela
        //Aqui criamos o cabeçalho da tabela.
        // A tag <tr> abre uma linha, enquanto a <td> abre uma célula.
        echo "<tr><td>NomeAluno</td>"
             ."<td>Matricula</td>"
             ."<td>DataEnvio</td>"
             ."</tr>"; // Fechamos o cabeçalho. 
             echo $tabela; // imprime 
   
//Vamos percorrer o array, e fazer a mesma coisa que fizemos em cima.
//Montar uma linha, e as células da tabela.
while($exibe=mysql_fetch_array($resultado)) {
    $id = $exibe['id'];
    //Não exibi todos os dados, agora é só você completar, colocando cada célula dentro de um <td>
         echo "<tr><td>$exibe[Alvara]</td>"
              ."<td><a href='xxx.php?id=$id'>Ver Arquivo</a></td>"
              ."</tr>";
    }
    // E fora do while fechamos a tabela.
    echo "</table>";
}   ?>

</body>


</html><a href="index.php">Voltar para página principal</a>