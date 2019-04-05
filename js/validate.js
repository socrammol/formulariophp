function validate(){
    /* •Data: deverá ser um campo de data no seguinte formato mm-dd-YYYY ok
    ##• Texto: O texto só deverá possuir letras minúsculas e espaços, até 144 chars. ok
    ##• Texto grande: O texto só deverá possuir letras maiúsculas, números e espaços até 255 chars.ok*/


    var Data         = document.getElementById('data').value
    var Texto        = document.getElementById('texto').value;
    var Textogrande  = document.getElementById('textogrande').value;
    var erro         = 0;
    valido           = true;
    //testando data
    //criando um array
    
    //garante que o array possue tres elementos (dia, mes e ano)
    if(!Data,!Texto,!Textogrande){
        return valido;
    }
    if(!Data){

    }else
    var array = Data.split("-");
    if (array){if(array.length != 3)
        {
        alert('Data fora do padrão mm/dd/YYYY');
        Data.focus();
        erro = 1;
        return false;
        }
        if(array.length == 3) {
            if ((array[0].length != 2) || (array[1].length != 2) || (array[2].length != 4))
            {
                alert('Data fora do padrão mm/dd/YYYY');
                erro = 1;
                return false;
            }
            dia = array[1];
            mes = array[0];
            ano = array[2];
            //testa se a data é válida
            var MyData = new Date(ano, mes - 1, dia);
            if((MyData.getMonth() + 1 != mes)
                ||(MyData.getDate() != dia)
                ||(MyData.getFullYear() != ano)){
                data.focus();
                erro = 1;
                return false;}
                //alert("Valores inválidos para o dia, mês ou ano. Por favor corrija.");
            else
                console.log("data certa")
            
            }if(valido == false){
                data.focus();
                data.select();
            }
        }
    

    
    //testando texto pequeno
    const regex =/[^A-Z0-9|!|@|#|$|%|¨|&|*|(|)|-|_|+|=|§|¬|?]$/;
    if(!Texto){

    }else {
            if(Texto.search(regex) != -1){
                console.log("ok")
            }
            else{
            alert(" o texto: $Texto deve possuir letras minusculas e espaços ")
            erro = 1;
        }
    }
   //testando texto grande
    const regexM =/[^a-z|!|@|#|$|%|¨|&|*|(|)|-|_|+|=|§|¬|?]$/;
    if(!Textogrande){

    }else {
        if(Textogrande.search(regexM) != -1){
            console.log("ok")
        }
        else{
            console.log(" o texto: $Texto deve possuir letras minusculas e espaços ")
            erro = 1;
        }
    }
    if(erro == 0){
        return valido;
    }
}