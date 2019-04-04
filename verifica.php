<html>
    <body>
        <?php
        $Data         = $_POST["Data"];
        $Texto        = $_POST["Texto"];
        $Textogrande  = $_POST["Textogrande"];
        $erro         = 0;
## •Data: deverá ser um campo de data no seguinte formato mm-dd-YYYY ok
##• Texto: O texto só deverá possuir letras minúsculas e espaços, até 144 chars.
##• Texto grande: O texto só deverá possuir letras maiúsculas, números e espaços até 255 chars.
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
        ?>
    </body>
</html>