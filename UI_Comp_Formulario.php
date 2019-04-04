/*Caso o parâmetro $validateScript seja passado, 
deverá associar ao onsubmit do formulário a ser 
renderizado validações JavaScript para previnir o 
submit do form com as seguintes regras:
    • Data: deverá ser um campo de data no 
    seguinte formato mm-dd-YYYY
    • Texto: O texto só deverá possuir letras 
    minúsculas e espaços, até 144 chars.

    • Texto grande: O texto só deverá possuir 
    letras maiúsculas, números e espaços até 255 chars.*/
Ui_Comp_Formulario.php
<?php
class Ui_Comp_Formulario
{
    function validate(){
        ## •Data: deverá ser um campo de data no seguinte formato mm-dd-YYYY ok
        ##• Texto: O texto só deverá possuir letras minúsculas e espaços, até 144 chars. ok
        ##• Texto grande: O texto só deverá possuir letras maiúsculas, números e espaços até 255 chars.ok
        $Data         = $_POST["Data"];
        $Texto        = $_POST["Texto"];
        $Textogrande  = $_POST["Textogrande"];
        $erro         = 0;
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
        }else return $Data;
        //testando texto pequeno
       if(!empty($Texto)){
        if (strlen($Texto) < 140 && preg_match_all('/[^A-Z0-9|!|@|#|$|%|¨|&|*|(|)|-|_|+|=|§|¬|?]$/', $Texto)){
        }else{
            echo " o texto: $Texto deve possuir letras minusculas e espaços ";
            $erro = 1;
        }
       }else return $Texto;
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
        }else return $Textogrande;
    }
    function renderer($param){
        #Função que retornará o html do formulário, seguindo o modelo do layout abaixo.
        #onde $param deverá ser um array com os seus índices iguais ao nome dos campos 
        #do formulário, este parâmetro não será obrigatório sendo que se caso não seja passado, 
        #os campos do formulário estarão vazios.
        $param  = [];
        $param [0] = $Data;
        $param [1] = $Texto;
        $param [2] = $Textogrande;
        return $param;
    }

}