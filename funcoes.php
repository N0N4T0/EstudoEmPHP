<!DOCTYPE html>

<html>

    <head></head>

    <?php

        //Primeira forma
        //Parametro sao valores que vao ser passados
        /*function somarNumero($x, $y){
            $conta = $x + $y;

            return($conta);
        }*/   
        
        //Segunda forma
        function somarNumero($x, $y){
            return $x + $y;
        } 

        $resultado = somarNumero(10,20);
        echo "O resultado é: " .$resultado;


    
    
    ?>

    <body>
        
    </body>


</html>