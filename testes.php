<html>
    <body>
        <?php
        $Data         = $_POST["Data"];
        $Texto        = $_POST["Texto"];
        $Textogrande  = $_POST["Textogrande"];
        $erro         = 0;

        /*function mensagens($num, $campo, $max, $min) {
		
            $this->msg[0] = "Preencha o campo com um email v�lido <br />"; // EMAIL
            $this->msg[1] = "CEP com formato inv�lido (Ex: XXXXX-XXX) <br />"; // CEP
            $this->msg[2] = "Data em formato inv�lido (Ex: DD/MM/AAAA) <br />"; // DATA
            $this->msg[3] = "Telefone inv�lido (Ex: 01433333333) <br />"; // TELEFONE
            $this->msg[4] = "CPF inv�lido (Ex: 11111111111) <br />"; // CPF
            $this->msg[5] = "IP inv�lido (Ex: 192.168.10.1) <br />"; // IP
            $this->msg[6] = "Preencha o campo ".$campo." com numeros <br />"; // APENAS NUMEROS
            $this->msg[7] = "URL especificada � inv�lida (Ex: http://www.google.com) <br />"; // URL
            $this->msg[8] = "Preencha o campo ".$campo." <br />"; // CAMPO VAZIO
            $this->msg[9] = "O ".$campo." deve ter no m�ximo ".$max." caracteres <br />"; // M�XIMO DE CARACTERES
            $this->msg[10] = "O ".$campo." deve ter no m�nimo ".$min." caracteres <br />"; // M�NIMO DE CARACTERES
            
            return $this->msg[$num];
        }
## • Data: deverá ser um campo de data no seguinte formato mm-dd-YYYY
##• Texto: O texto só deverá possuir letras minúsculas e espaços, até 144 chars.
##• Texto grande: O texto só deverá possuir letras maiúsculas, números e espaços até 255 chars.
//verificação se a data possui o modelo mm-dd-YYYY
#$data = DateTime::createFromFormat('d/m/Y', $_POST['data']);
/*if(!$Data->format('mm/dd/YYYY') ){
    echo "data deve ser informada no formato mm-dd-YYYY favor inserir da forma correta "; $erro=1;
    }
if(strlen ($Texto)>140){
    echo "texto muito grande , so pode haver 140 caracters"; $erro=1;
    }
foreach($Texto as $testcase){
    if(!ctype_lower($textcase)){
        echo "o texto tem que ser todo digitado em minusculo"; $erro=1;
    }
}
if(strlen ($Textogrande)>255){
    echo "texto muito grande , so pode haver 140 caracters"; $erro=1;
    }
foreach($Textogrande as $testcase){
    if(!ctype_upper($textcase)){
        echo "o texto tem que ser todo digitado em maiusculo"; $erro=1;
    }
}*/
/*if (!eregi("^[0-9]{2}-[0-9]{2}-[0-9]{4}$", $Data)) { 
    echo "favor informar a data da forma correta mm/dd/YYYY"; $erro=1;/*
}
if (empty($Textogrande)){
    echo "favor preencher o campo Texto GRande"; $erro=1;
}
if ($erro==0){
    echo"todos os dados foram digitados corretamente!";
}*/
?>
    </body>
</html>