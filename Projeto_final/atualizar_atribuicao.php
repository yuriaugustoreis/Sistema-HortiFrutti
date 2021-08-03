<?php

include "conexao.php";

//variáveis quem manda pra ca é o post do JS. Seguir padrão;
$id_atribuicao = $_POST["id_atribuicao"];
$titulo_funcao = $_POST["titulo_funcao"];

//Update onde (where) id de controle for acionado, o id nunca muda, somente informações antes.
$update = "UPDATE atribuicao SET titulo_funcao='$titulo_funcao' WHERE id_atribuicao='$id_atribuicao'";

$conexao->query($update);

echo "1";
?>