<?php
$tabela = array(
    "%20" => " ",
    "%21" => "!" ,
    "%22" => "\"",
    "%23" => "#",
    "%24" => "\$",
    "%25" => "%",
    "%26" => "&",
    "%27" => "'",
    "%28" => "",
    "%29" => "",
    "%2a" => "*",
    "%2b" => "+",
    "%2c" => " =>",
    "%2d" => "~",
    "%2e" => ".",
    "%2f" => "/",
    "%30" => "0",
    "%31" => "1",
    "%32" => "2",
    "%33" => "3",
    "%34" => "4",
    "%35" => "5",
    "%36" => "6",
    "%37" => "7",
    "%38" => "8",
    "%39" => "9",
    "%3a" => ":",
    "%3b" => ",",
    "%3c" => "<",
    "%3d" => "=",
    "%3e" => ">",
    "%3f" => "?",
    "%40"=> "@",
    "%41" => "A",
    "%42" => "B",
    "%43" => "C",
    "%44" => "D",
    "%45" => "E",
    "%46" => "F",
    "%47" => "G",
    "%48" => "H",
    "%49" => "I",
    "%4a" => "J",
    "%4b" => "K",
    "%4c" => "L",
    "%4d" => "M",
    "%4e" => "N",
    "%4f" => "O",
    "%50" => "P",
    "%51" => "Q",
    "%52" => "R",
    "%53" => "S",
    "%54" => "T",
    "%55" => "U",
    "%56" => "V",
    "%57" => "W",
    "%58" => "X",
    "%59" => "Y",
    "%5a" => "Z",
    "%5b" => "[",
    "%5c" => "\\\\",
    "%5d" => "]",
    "%5e" => "^",
    "%5f" => "_",
    "%60" => "`",
    "%61" => "a",
    "%62" => "b",
    "%63" => "c",
    "%64" => "d",
    "%65" => "e",
    "%66" => "f",
    "%67" => "g",
    "%68" => "h",
    "%69" => "i",
    "%6a" => "j",
    "%6b" => "k",
    "%6c" => "l",
    "%6d" => "m",
    "%6e" => "n",
    "%6f" => "o", 
    "%70" => "p",
    "%71" => "q",
    "%72" => "r",
    "%73" => "s",
    "%74" => "t",
    "%75" => "u",
    "%76" => "v",
    "%77" => "w",
    "%78" => "x",
    "%79" => "y",
    "%7a" => "z",
    "%7b" => "{",
    "%7c" => "|",
    "%7d" => "}",
    "%7e" => "~",
);

  
//////////////////////////////////////////////////
$texto = $_POST["texto"];
$tamanho_total=strlen($texto);
$texto_array=str_split($texto);
$texto_final=array();
$teste=false;
$posicao=0;
while($teste==false){

    //ler posiçao [0]
    if($texto_array[$posicao]=="%"){//if  posicao [0] == "%"{
    //    ler posição [1];
        if($texto_array[$posicao+1]>1&&$texto_array[$posicao+1]<8){//if posição 1 >1 e posicao 1 < 8 {
            //ler posicao [2]
            if($texto_array[$posicao+2]=="0"||$texto_array[$posicao+2]=="1"||$texto_array[$posicao+2]=="2"||$texto_array[$posicao+2]=="3"||$texto_array[$posicao+2]=="4"||
            $texto_array[$posicao+2]=="5"||$texto_array[$posicao+2]=="6"||$texto_array[$posicao+2]=="7"||$texto_array[$posicao+2]=="8"||$texto_array[$posicao+2]=="9"||
            $texto_array[$posicao+2]=="a"||$texto_array[$posicao+2]=="b"||$texto_array[$posicao+2]=="c"||$texto_array[$posicao+2]=="d"||$texto_array[$posicao+2]=="e"||
            $texto_array[$posicao+2]=="f"){//        if posicao 2 = (0,1,2,3,4,5,6,7,8,9,a,b,c,d,e,f){



                //   traduz da tabela
                $texto3pos="{$texto_array[$posicao]}{$texto_array[$posicao+1]}{$texto_array[$posicao+2]}";


                foreach($tabela as $key => $value) {

                    if ($key == $texto3pos){

                        array_push($texto_final,$value);
                        $posicao=$posicao+3;
                        break;      
                    }
                }
            }else{
                array_push($texto_final,$texto_array[$posicao]);
                $posicao++;
            }
        }else{
            array_push($texto_final,$texto_array[$posicao]);
            $posicao++;
        }
    }else{
        array_push($texto_final,$texto_array[$posicao]);
        $posicao++;
    }

    if($posicao>=$tamanho_total){
        $teste=true;
    }
}
$str=implode("", $texto_final);


echo '{"sucesso":"true", "novo_texto":"'. $str . '"}';	


    

















