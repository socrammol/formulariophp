<?php
class Ui_Comp_Formulario
{   
    public function __construct(){

    }

    
    function renderer($param){
        #Função que retornará o html do formulário, seguindo o modelo do layout abaixo.
        #onde $param deverá ser um array com os seus índices iguais ao nome dos campos 
        #do formulário, este parâmetro não será obrigatório sendo que se caso não seja passado, 
        #os campos do formulário estarão vazios.
        $Data = $param [0];
        $Texto = $param [1];
        $Textogrande = $param [2];
        echo" <div> 
        <form action='index.php' name='form1' method='post'>
        <pre>
        Data:        <'$Data'>
        Texto:       <'$Texto'>
        Textogrande: <'$Textogrande'>
        <input type='submit' value='submit' name='submit'>
        </pre>
        </form>
        </div> ";
        
    }

}
 $uiData = new Ui_Comp_Formulario();
 $Data         = $_POST["Data"];
 $Texto        = $_POST["Texto"];
 $Textogrande  = $_POST["Textogrande"];
 $array =  [$Data,$Texto,$Textogrande];
 $uiData->renderer($array);