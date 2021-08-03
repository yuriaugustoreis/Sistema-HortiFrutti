<?php

    include "conexao.php";

//$POST está vindo de dentro do JS 
    $nome = $_POST["nome"];

//sempre trabalhar com WHERE, se não apaga tudo dentro.
    $delete =  "DELETE FROM funcionario WHERE nome='$nome'";

    $conexao->query($delete);

//após a conexão, e apagar conteúdo, esse 1 tem como objetivo ativar o controle... para entrar dentro do if no JS.
    echo "1";
?>