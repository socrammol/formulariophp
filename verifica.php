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
        if(count($array) == 3){
            $dia = (int)$array[1];
            $mes = (int)$array[0];
            $ano = (int)$array[2];
            //testa se a data é válida
            if(checkdate($mes, $dia, $ano)){
                echo "data '$Data' e valida'";
            }else{
                echo "data '$Data' e invalida";
            }
        }else{
            echo "formato da data '$Data' invalido";
        }
        //testando texto pequeno
       if (strlen($Texto) < 140 && preg_match_all('/[^A-Z0-9|!|@|#|$|%|¨|&|*|(|)|-|_|+|=|§|¬|?]$/', $Texto)){
       }else{
           echo " o texto  não possui todas as letras minusculas $Texto";
       }
       //testando texto grande
        if (strlen($Texto) < 255 && preg_match_all('/[^a-z|!|@|#|$|%|¨|&|*|(|)|-|_|+|=|§|¬|?]$/', $Texto)){
       }else{
           echo " o texto  não possui todas as letras minusculas $Texto";
       }
        ?>
    </body>
</html>