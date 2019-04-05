<?php require_once('fragment\header.php'); ?>
<body>
     <div>
    <h1>Formulario de teste</h1>
     </div>
    <br>
    <form action="UI_Comp_Formulario.php"  name="form1" method="post" onclick="validate()">
    <pre>
    Data:        <input type="text" size="20" maxlength="256" name="Data" id="data">
    Texto:       <input type="text" size="20" maxlength="256" name="Texto" id="texto">
    Checkbox:    <input type="checkbox"  name="Checkbox">
    Textogrande: <textarea rows="5" cols="52" name="Textogrande" id="textogrande"></textarea>
    <input type="submit" value="submit" name="submit" >
    </pre>
     </form>
</body>
<?php require_once('fragment\footer.php'); ?>
