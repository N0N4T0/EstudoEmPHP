<!DOCTYPE html>

<html>

    <head></head>

    <?php
        
        
        $nome = "Lúcio";

        //md5 é usada muito para senha, por ser irreversível
        $nome2 = md5($nome);

        echo "Nome Original: " .$nome. "<br/>";
        echo "Nome Cripto.: " .$nome2;


    ?>

    <body>
        
    </body>


</html>