<html>
    <body>
        <?php
        $Data         = $_POST["Data"];
        $Texto        = $_POST["Texto"];
        $Textogrande  = $_POST["Textogrande"];
        $erro         = 0;
## •Data: deverá ser um campo de data no seguinte formato mm-dd-YYYY ok
##• Texto: O texto só deverá possuir letras minúsculas e espaços, até 144 chars. ok
##• Texto grande: O texto só deverá possuir letras maiúsculas, números e espaços até 255 chars.ok
        //testando data
        //criando um array
        $array = explode('-', $Data);
        //garante que o array possue tres elementos (dia, mes e ano)
        if(!empty($Data)){
            if(count($array) == 3){
                $dia = (int)$array[1];
                $mes = (int)$array[0];
                $ano = (int)$array[2];
                //testa se a data é válida
                if(checkdate($mes, $dia, $ano)){
                }else{
                    echo "data '$Data' e invalida";
                    $erro = 1;
                }
            }else{
                echo "formato da data '$Data' invalido";
            }
        }else
        //testando texto pequeno
       if(!empty($Texto)){
        if (strlen($Texto) < 140 && preg_match_all('/[^A-Z0-9|!|@|#|$|%|¨|&|*|(|)|-|_|+|=|§|¬|?]$/', $Texto)){
        }else{
            echo " o texto: $Texto deve possuir letras minusculas e espaços ";
            $erro = 1;
        }
       }else
       //testando texto grande
        if(!empty($Textogrande)){
            if (strlen($Textogrande) < 255 && preg_match_all('/[^a-z0-9 |!|@|#|$|%|¨|&|*|(|)|-|_|+|=|§|¬|?]$/', $Textogrande)){
            }else{
                echo " o texto:$Textogrande deve possuir letras maisuculas com espaços e numeros  ";
                $erro = 1;
            }
            if($erro == 0){
                echo "todos os dados foram inseridos corretamente";
            }
        }else
        ?>
    </body>
</html>