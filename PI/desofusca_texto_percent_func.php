<?php

function desofusca_linha_percent($texto)
{

    include 'conecta_sql.php';

    $sql = "SELECT chave, valor from percent;";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll();
    $num_reg = count($rows);
    if ($num_reg > 0) {
        foreach ($rows as $percent) {
            $tabelaTemp[$percent['chave']] = $percent['valor'];
        }
    }

    // $texto = $_POST['texto'];
    $tamanho_total = strlen($texto);
    $texto_array = str_split($texto);
    $texto_final = array();
    $teste = false;
    $posicao = 0;
    while ($teste == false) {

        //ler posiçao [0]
        if ($texto_array[$posicao] == "%") { //if  posicao [0] == "%"{
            //    ler posição [1];
            if ($texto_array[$posicao + 1] > 1 && $texto_array[$posicao + 1] < 8) { //if posição 1 >1 e posicao 1 < 8 {
                //ler posicao [2]
                if (
                    $texto_array[$posicao + 2] == "0" || $texto_array[$posicao + 2] == "1" || $texto_array[$posicao + 2] == "2" || $texto_array[$posicao + 2] == "3" || $texto_array[$posicao + 2] == "4" ||
                    $texto_array[$posicao + 2] == "5" || $texto_array[$posicao + 2] == "6" || $texto_array[$posicao + 2] == "7" || $texto_array[$posicao + 2] == "8" || $texto_array[$posicao + 2] == "9" ||
                    $texto_array[$posicao + 2] == "a" || $texto_array[$posicao + 2] == "b" || $texto_array[$posicao + 2] == "c" || $texto_array[$posicao + 2] == "d" || $texto_array[$posicao + 2] == "e" ||
                    $texto_array[$posicao + 2] == "f"
                ) { //        if posicao 2 = (0,1,2,3,4,5,6,7,8,9,a,b,c,d,e,f){



                    //   traduz da tabela
                    $texto3pos = "{$texto_array[$posicao]}{$texto_array[$posicao + 1]}{$texto_array[$posicao + 2]}";


                    foreach ($tabelaTemp as $key => $value) {

                        if ($key == $texto3pos) {

                            array_push($texto_final, $value);
                            $posicao = $posicao + 3;
                            break;
                        }
                    }
                } else {
                    array_push($texto_final, $texto_array[$posicao]);
                    $posicao++;
                }
            } else {
                array_push($texto_final, $texto_array[$posicao]);
                $posicao++;
            }
        } else {
            array_push($texto_final, $texto_array[$posicao]);
            $posicao++;
        }

        if ($posicao >= $tamanho_total) {
            $teste = true;
        }
    }
    $str = implode("", $texto_final);

return($str);
    
}
