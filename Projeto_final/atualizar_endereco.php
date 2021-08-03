<?php

include "conexao.php";

//variáveis quem manda pra ca é o post do JS. Seguir padrão;
$id_endereco = $_POST["id_endereco"];
$bairro = $_POST["bairro"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$complemento = $_POST["complemento"];

//Update onde (where) id de controle for acionado, o id nunca muda, somente informações antes.
$update = "UPDATE endereco SET bairro='$bairro', cep='$cep', rua='$rua', complemento='$complemento'  WHERE id_endereco='$id_endereco'";

$conexao->query($update);

echo "1";
?>