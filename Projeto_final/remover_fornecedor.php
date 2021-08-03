<?php

    include "conexao.php";

//$POST está vindo de dentro do JS 
    $id_fornecedor = $_POST["id_fornecedor"];

//sempre trabalhar com WHERE, se não apaga tudo dentro.
    $delete =  "DELETE FROM fornecedor WHERE id_fornecedor='$id_fornecedor'";

    $conexao->query($delete);

//após a conexão, e apagar conteúdo, esse 1 tem como objetivo ativar o controle... para entrar dentro do if no JS.
    echo "1";
?>