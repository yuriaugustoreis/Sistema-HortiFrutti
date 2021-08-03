<?php

include "conexao.php";

//variáveis quem manda pra ca é o post do JS. Seguir padrão;
$cpf = $_POST["cpf"];
$salario = $_POST["salario"];

//Update onde (where) id de controle for acionado, o id nunca muda, somente informações antes.
$update = "UPDATE funcionario SET salario='$salario' WHERE cpf='$cpf'";

$conexao->query($update);

echo "1";
?>