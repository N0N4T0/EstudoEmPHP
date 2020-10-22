<!DOCTYPE html>

<html>

    <head></head>

    <?php
        $dsn = "mysql:dbname=blog; host=127.0.0.1";
        $dbuser = "root";
        $dbpass = "";

        //Solicitando conexão com banco de dados, um serviço externo a nossa aplicação.
        try{
            //Inicia um objeto do PDO (biblioteca PDO)
            $pdo = new PDO($dsn, $dbuser, $dbpass);
            //echo "Conexão estabelecida com sucesso!";

          

        } 
        catch(PDOException $e){
            echo "Conexão falhou: ".$e->getMessage();
        }


    ?>

    <body>
        
    </body>


</html>