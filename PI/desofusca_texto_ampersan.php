<?php
include 'conecta_sql.php';

$sql = "SELECT chave, valor from ampersan;";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$num_reg = count($rows);
if ($num_reg > 0) {
    foreach ($rows as $ampersan) {
        $tabelaTemp[htmlentities($ampersan['chave'])] = $ampersan['valor'];
    }
}

$texto_ampersan = $_POST['texto_ampersan'];
$tamanho_total = strlen($texto_ampersan); //retorna tamanho da string
$texto_array = str_split($texto_ampersan); //converter string em array
$texto_final = array();
$texto_traduzir = array();
$posicao = 0;
$estado = 0;
$texto3pos = '';
$i = 0;
$tamanho_traduzir = 0;

while ($posicao < $tamanho_total) {
    
    if ($estado == 0) {
        if ($texto_array[$posicao] == "&") {
            $estado = 1;
            array_push($texto_traduzir, $texto_array[$posicao]);

            while ($estado == 1) {
                $posicao++;
                if ($posicao >= $tamanho_total) {
                    
                break;
                }


                if ($texto_array[$posicao] == ";") {

                    $estado = 0;
                    array_push($texto_traduzir, $texto_array[$posicao]);
                    //TRADUZIR
                    $tamanho_traduzir = count($texto_traduzir);

                    $posicao++;
                    //ver se este for funciona
                    for ($i = 0; $i < $tamanho_traduzir; $i++) {

                        $texto3pos = $texto3pos . "{$texto_traduzir[$i]}";
                    }

                    foreach ($tabelaTemp as $key => $value) {

                        if (htmlentities($key) == $texto3pos) {

                            array_push($texto_final, $value);
                            $texto3pos = '';
                            $texto_traduzir = array();

                            break;
                        } else {
                            array_push($texto_final, $texto3pos);
                            $texto3pos = '';
                            $texto_traduzir = array();
                        }
                    }
                } else {
                    array_push($texto_traduzir, $texto_array[$posicao]);
                }
            }
        } else {
            array_push($texto_final, $texto_array[$posicao]);
            $posicao++;
        }
    }
}

array_push($texto_final, implode("", $texto_traduzir));
$str = implode("", $texto_final);


echo '{"sucesso":"true", "novo_texto_ampersan":"' . $str . '"}';
