<?php
function desofusca_linha_char($texto_char){

include 'conecta_sql.php';

$sql = "SELECT chave, valor from tabela_char;";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$num_reg = count($rows);
if ($num_reg > 0) {
    foreach ($rows as $percent) {
        $tabelaTemp[$percent['chave']] = $percent['valor'];
    }
}

// $texto_char = $_POST['texto_char'];
$tamanho_total = strlen($texto_char);
$texto_array = str_split($texto_char);
$texto_final = array();
$teste = false;
$posicao = 0;
$cebola = '';
$num32 = 32;
$texto_auxiliar = '';

while ($teste == false) {
    if ($posicao <= ($tamanho_total - 5)) {
        $cebola = $texto_array[$posicao] . $texto_array[$posicao + 1] . $texto_array[$posicao + 2] . $texto_array[$posicao + 3] . $texto_array[$posicao + 4];
        //ler posiçao [0]
        if ($cebola == "char(") {

            //ler posição [1];

            if (intval($texto_array[$posicao + 5]) != 2 && intval($texto_array[$posicao + 6]) != 0) {

                if (intval($texto_array[$posicao + 6]) >= 0 && intval($texto_array[$posicao + 6]) < 10) {
                    //ATÉ AQUI TA BELEZA
                    if ($texto_array[$posicao + 7] == ")") {
                        $texto3pos = "{$texto_array[$posicao]}{$texto_array[$posicao + 1]}{$texto_array[$posicao + 2]}{$texto_array[$posicao + 3]}{$texto_array[$posicao + 4]}{$texto_array[$posicao + 5]}{$texto_array[$posicao + 6]}{$texto_array[$posicao + 7]}";

                        //  traduz da tabela
                        foreach ($tabelaTemp as $key => $value) {

                            if ($key == $texto3pos) {

                                array_push($texto_final, $value);
                                $posicao = $posicao + 8;
                                break;
                            }
                        }
                    } else if (intval($texto_array[$posicao + 7]) >= 0 && intval($texto_array[$posicao + 7]) <= 9) {
                        $texto_auxiliar = "{$texto_array[$posicao + 5]}{$texto_array[$posicao + 6]}{$texto_array[$posicao + 7]}";
                        if (intval($texto_auxiliar <= 126)) {
                            $texto3pos = "{$texto_array[$posicao]}{$texto_array[$posicao + 1]}{$texto_array[$posicao + 2]}{$texto_array[$posicao + 3]}{$texto_array[$posicao + 4]}{$texto_array[$posicao + 5]}{$texto_array[$posicao + 6]}{$texto_array[$posicao + 7]}{$texto_array[$posicao + 8]}";

                            //  traduz da tabela
                            foreach ($tabelaTemp as $key => $value) {

                                if ($key == $texto3pos) {

                                    array_push($texto_final, $value);
                                    $posicao = $posicao + 9;
                                    break;
                                }
                            }
                        } else {
                            array_push($texto_final, $texto_array[$posicao]);
                            $posicao++;
                        }
                        //   traduz da tabela

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
        } else {
            array_push($texto_final, $texto_array[$posicao]);
            $posicao++;
        }
        if ($posicao >= $tamanho_total) {
            $teste = true;
        }
    } else {
        array_push($texto_final, $texto_array[$posicao]);
        $posicao++;
        if ($posicao >= $tamanho_total) {
            $teste = true;
        }
    }
}
$str = implode("", $texto_final);

return ($str);
}