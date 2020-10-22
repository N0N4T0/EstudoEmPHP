<!DOCTYPE html>

<html>

    <head></head>

    <?php
        
        //Explode divide strings
        $nome = "Lúcio Nonato Silva de Oliveira";
        $x = explode(" ", $nome);//Aonde tiver espaço em branco será dividido
        print_r($x);
        echo "</br>";

        //Implode = junta strings
        $array = array("Lúcio", "Nonato", "Silva", "de", "Oliveira");
        $nomecompleto = implode(" ", $array);
        echo $nomecompleto;
        echo "</br>";

        //NUmber_format = formata numeros de diversas formas possiveis
        $x = number_format(8234.2878127182, 2, ",", "");
        echo $x;
        


    ?>

    <body>
        
    </body>


</html>