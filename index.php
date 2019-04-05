<?php require_once('fragment/header.php'); ?>
<body>
     <div class="conatiner">
     <div class="head">
    <h1 class="h1">Formulario de teste</h1>
     </div>
    <form action="UI_Comp_Formulario.php"  name="form1" method="post">
    <div>
    <pre>
    Data:        <input type="text" size="20" maxlength="256" name="Data" id="data">
    Texto:       <input type="text" size="20" maxlength="256" name="Texto" id="texto">
    Checkbox:    <input type="checkbox"  name="Checkbox">
    Textogrande: <textarea rows="5" cols="52" name="Textogrande" id="textogrande"></textarea>
    <input type="submit" value="submit" name="submit" onclick="return validate()" >
    </pre>
    </div>
     </form>
     </div>
</body>
<?php require_once('fragment/footer.php'); ?>
