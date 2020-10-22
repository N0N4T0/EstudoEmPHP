<html>

    <head></head>

    <?php
        //preveinindo sqlinjection com addcslashes()
        $autor = addcslashes($_POST["autor"]);

        $sql = "SELECT * FROM post WHERE autor = '$autor'";

    ?>

    <body>
        
    </body>


</html>