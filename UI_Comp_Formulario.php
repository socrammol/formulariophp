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
        require_once('fragment/header.php');
        echo" 
                <?php require_once('fragment/header.php'); ?>
                <h1>Formulario de teste</h1>
                <br>
                <form action=\"index.php\" name=\"form1\" method=\"post\" onsubmit=\"validate()\">
                <pre>
                Data:        <input value='$Data' type=\"text\" size=\"20\" maxlength=\"256\" name=\"Data\">
                Texto:       <input value='$Texto' =\"text\" size=\"20\" maxlength=\"256\" name=\"Texto\">
                Checkbox:    <input type=\"checkbox\"  name=\"Checkbox\">
                Textogrande: <textarea type=\"text\" rows=\"5\" cols=\"52\" name=\"Textogrande\">$Textogrande</textarea>
                <input type=\"submit\" value=\"submit\" name=\"submit\">
                </pre>
     </form>
     ";require_once('fragment/footer.php');
        
    }

}
 $uiData = new Ui_Comp_Formulario();
 $Data         = $_POST["Data"];
 $Texto        = $_POST["Texto"];
 $Textogrande  = $_POST["Textogrande"];
 $param =  [$Data,$Texto,$Textogrande];
 $uiData->renderer($param);