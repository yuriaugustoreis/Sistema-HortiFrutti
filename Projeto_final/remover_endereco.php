<?php

    include "conexao.php";

//$POST está vindo de dentro do JS 
    $id_endereco = $_POST["id_endereco"];

//sempre trabalhar com WHERE, se não apaga tudo dentro.
    $delete =  "DELETE FROM endereco WHERE id_endereco='$id_endereco'";

    $conexao->query($delete);

//após a conexão, e apagar conteúdo, esse 1 tem como objetivo ativar o controle... para entrar dentro do if no JS.
    echo "1";
?>