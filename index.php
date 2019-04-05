
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario de teste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
    <h1>Formulario de teste</h1>
    <br>
    <div  name="form1" method="post" onclick="validate()">
    <pre>
    Data:        <input type="text" size="20" maxlength="256" name="Data" id="data">
    Texto:       <input type="text" size="20" maxlength="256" name="Texto" id="texto">
    Checkbox:    <input type="checkbox"  name="Checkbox">
    Textogrande: <textarea rows="5" cols="52" name="Textogrande" id="textogrande"></textarea>
    <input type="submit" value="submit" name="submit" >
    </pre>
     </div>
</body>
<script src="js/validate.js"></script>
</html>
