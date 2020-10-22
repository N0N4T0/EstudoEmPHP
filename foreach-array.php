<?php


//Exemplo foreach 1
$nomes = array(
    array("nome"=>"Boniecky", "idade"=>90),
    array("nome"=>"André", "idade"=>92),
    array("nome"=>"Fulano", "idade"=>12),
    array("nome"=>"Cicrano", "idade"=>125)
);

//Foreach é usado muito para listagem de dados
foreach ($nomes as $pessoa) {
    echo "Pessoa: " .$pessoa["nome"].
        " - Idade: " .$pessoa["idade"].
    "<br/>";
}
//Fim exemplo 1

//Exemplo 2
$aluno = array(
    //Chave => Valor
    "nome"=> "Nonato",
    "idade"=> 25,
    "estado"=> "Bahia",
    "pais"=> "Brasil"
);

//duas varíaveis após o "as" será entendido chave na primeira variável e o valor na segunda
foreach($aluno as $chave => $dado ){
    echo $chave. " = " .$dado."<br/>";
}



?>