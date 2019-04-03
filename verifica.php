<html>
    <body>
        <?php
        $Data         = $_POST["Data"];
        $Texto        = $_POST["Texto"];
        $Textogrande  = $_POST["Textogrande"];
        $erro         = 0;
        function validarData($Data) {
            if (!eregi("^[0-9]{2}-[0-9]{2}-[0-9]{4}$", $Data)) { 
                echo "data invalida";
            }
        }
?>
    </body>
</html>