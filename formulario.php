<!DOCTYPE html>

<html>

    <head>
    </head>

    <body>
        <?php
            //quando se usa uma função do php que retorna true or false existe a opção de negar o resultado dela
            if(isset($_POST['email']) && !empty($_POST['email']))
            {
                if(isset($_POST['senha']) && !empty($_POST['senha'])){
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                echo "Meu email eh: ".$email. " e minha senha é: ".$senha;  
                }
                
            }
            


            /*Primeira forma de verificação de POST
            //isset é uma função que retorna true or false
            //empty "Pergunta se ta vazio?" retornando true or false
            if(isset($_POST['email']) && empty($_POST['email']) == false)
            {
                echo "Usuário enviou os dados";
            }
            */

        ?>  

        <hr/>
        <form method="POST">
            E-mail: <br/>
            <input type="text" name="email"/><br/><br/>

            Senha: <br/>
            <input type="password" name="senha"/></br></br>
        
            <input type="submit" value="Enviar Dados"/>
        </form>


    </body>


</html>

