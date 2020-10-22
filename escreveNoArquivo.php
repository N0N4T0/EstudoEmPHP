<!DOCTYPE html>

<html>

    <head></head>

    <?php
        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];

            //cria arquivo e inscreve dentro dele
            file_put_contents("teste.txt", $nome, FILE_APPEND);//FILE_APPEND aproveita o que tem no arquivo e adciona dentro dele.

            //realizando redirecionamento
            header("Location: index.php");
        }
    ?>

    <body>
        <!--Evitando reenvio de dados com F5-->
        <form method="POST">
            <input type="text" name="nome"/>
            <input type="submit" value="Enviar"/>
        </form>        
    </body>


</html>