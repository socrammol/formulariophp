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
                <?php  ?>
                        <body>
                        <div class=\"conatiner\">
                                <div class=\"head\">
                                <h1 class=\"h1\">Formulário de teste RENDER</h1>
                                </div>
                                <div class=\"formulario\">
                                <form action=\"index.php\" name=\"form1\" method=\"post\">
                                        <div class=\"form\">
                                        <div>
                                                <label for=\"data\">Data:</label>
                                                <input value='$Data' type=\"text\" size=\"20\" maxlength=\"255\" name=\"data\" id=\"data\">
                                        </div>

                                        <div>
                                                <label for=\"texto\">Texto:</label>
                                                <input  value='$Texto' type=\"text\" size=\"20\" maxlength=\"256\" name=\"texto\" id=\"texto\">
                                        </div>

                                        <div>
                                                <label for=\"checkbox\">Checkbox:</label>
                                                <input type=\"checkbox\" name=\"Checkbox\">
                                        </div>

                                        <div>
                                                <label for=\"textogrande\" class=\"label-area\">Textogrande:</label>
                                                <textarea rows=\"8\" cols=\"40\" name=\"Textogrande\" id=\"textogrande\">$Textogrande</textarea>
                                        </div>

                                        <input type=\"submit\" value=\"Submit\" name=\"submit\" onclick=\"return validate()\">
                                        </div>
                                        <div class=\"desc-form\">
                                        Teste de formulário
                                        </div>
                                </form>
                                </div>
                        </div>
                        </body>
        <?php  ?>
     ";
     require_once('fragment/footer.php');   
    }
}
 $uiData = new Ui_Comp_Formulario();
 $Data         = $_POST["data"];
 $Texto        = $_POST["texto"];
 $Textogrande  = $_POST["Textogrande"];
 $param =  [$Data,$Texto,$Textogrande];
 $uiData->renderer($param);