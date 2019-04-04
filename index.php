
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
    <form action="UI_Comp_Formulario.php" name="form1" method="post" onsubmit="validate()">
    <pre>
    Data:        <input type="text" size="20" maxlength="256" name="Data">
    Texto:       <input type="text" size="20" maxlength="256" name="Texto">
    Checkbox:    <input type="checkbox"  name="Checkbox">
    Textogrande: <textarea rows="5" cols="52" name="Textogrande"></textarea>
    <input type="submit" value="submit" name="submit">
    </pre>
     </form>
</body>
</html>