<?php

include "conexao.php";

//variáveis quem manda pra ca é o post do JS. Seguir padrão;
$id_fornecedor = $_POST["id_fornecedor"];
$cnpj = $_POST["cnpj"];
$telefone = $_POST["telefone"];
$nome = $_POST["nome"];

//Update onde (where) id de controle for acionado, o id nunca muda, somente informações antes.
$update = "UPDATE fornecedor SET cnpj='$cnpj', telefone='$telefone', nome='$nome'  WHERE id_fornecedor='$id_fornecedor'";

$conexao->query($update);

echo "1";
?>