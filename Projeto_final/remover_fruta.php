<?php

    include "conexao.php";

//$POST está vindo de dentro do JS 
    $nome_fruta = $_POST["nome_fruta"];

//sempre trabalhar com WHERE, se não apaga tudo dentro.
    $delete =  "DELETE FROM fruta WHERE nome_fruta='$nome'";

    $conexao->query($delete);

//após a conexão, e apagar conteúdo, esse 1 tem como objetivo ativar o controle... para entrar dentro do if no JS.
    echo "1";

?>