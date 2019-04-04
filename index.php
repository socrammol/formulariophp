index.php
<?php
require_once 'UI_Comp_Formulario';
UI_Comp_Formulario($validateScript);
?>
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
    <form action="submit" method="POST">
    <pre>
    Data:        <input type="text" size="20" maxlength="256" name="Data" $validateScript = $_POST[Data]
    <?php echo UI_Comp_Formulario($validateScript)?>>
    Texto:       <input type="text" size="20" maxlength="256" name="Texto" $validateScript = $_POST[Texto]
    <?php echo UI_Comp_Formulario($validateScript)?>>
    Checkbox:    <input type="checkbox"  name="Checkbox">
    Textogrande: <textarea rows="5" cols="52" name="Textogrande"$validateScript = $_POST[Textogrande]
    <?php echo UI_Comp_Formulario($validateScript)?>></textarea>
    <input type="submit" value="submit" name="submit">
    </pre>
     </form>
</body>
</html>