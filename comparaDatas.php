<!DOCTYPE html>

<html>

    <head></head>

    <?php
        //Código que exibe a proxima data definida por um valor      

        setlocale (LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Bahia');
        $datahoje = date('d/m/Y G:i:s');
        
        echo "Hoje :" .$datahoje. "</br>";
      
         //Exibir data daqui a 7 dias
         $datasetedias = date('d/m/Y G:i:s', strtotime("+7 days"));
         echo "Daqui a 7 dias = " .$datasetedias. "</br>";

        //Exibir data daqui a 15 dias
        $dataquinzedias = date('d/m/Y G:i:s', strtotime("+15 days"));
        echo "Daqui a 15 dias = " .$dataquinzedias. "</br>";  
    
    ?>

    <body>
        
    </body>


</html>