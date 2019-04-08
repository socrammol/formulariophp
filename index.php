<?php require_once('fragment/header.php'); ?>

<body>
    <div class="conatiner">
        <div class="head">
            <h1 class="h1">Formulário de teste</h1>
        </div>
        <div class="formulario">
            <form action="UI_Comp_Formulario.php" name="form1" method="post">
                <div class="form">
                    <div>
                        <label for="data">Data:</label>
                        <input type="text" size="20" maxlength="255" name="data" id="data">
                    </div>

                    <div>
                        <label for="texto">Texto:</label>
                        <input type="text" size="20" maxlength="256" name="texto" id="texto">
                    </div>

                    <div>
                        <label for="checkbox">Checkbox:</label>
                        <input type="checkbox" name="Checkbox">
                    </div>

                    <div>
                         <label for="textogrande" class="label-area">Textogrande:</label>
                        <textarea rows="8" cols="40" name="Textogrande" id="textogrande"></textarea>
                    </div>

                    <input type="submit" value="Submit" name="submit" onclick="return validate()">
                </div>
                <div class="desc-form">
                     Teste de formulário
                </div>
            </form>
        </div>
    </div>
</body>
<?php require_once('fragment/footer.php'); ?>