<?php

    include "conexao.php";

//$POST está vindo de dentro do JS 
    $id_atribuicao = $_POST["id_atribuicao"];

//sempre trabalhar com WHERE, se não apaga tudo dentro.
    $delete =  "DELETE FROM atribuicao WHERE id_atribuicao='$id_atribuicao'";

    $conexao->query($delete);

//após a conexão, e apagar conteúdo, esse 1 tem como objetivo ativar o controle... para entrar dentro do if no JS.
    echo "1";
?>