<?php

include "conexao.php";

//variáveis quem manda pra ca é o post do JS. Seguir padrão;
$nome_fruta = $_POST["nome_fruta"];
$valor = $_POST["valor"];
$quantia = $_POST["quantia"];
$datachegada = $_POST["datachegada"];

//Update onde (where) id de controle for acionado, o id nunca muda, somente informações antes.
$update = "UPDATE fruta SET valor='$valor', quantia='$quantia', datachegada='$datachegada' WHERE nome_fruta='$nome_fruta'";

$conexao->query($update);

echo "1";
?>