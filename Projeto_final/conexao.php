<?php

$sgbd ="mysql";
$host ="localhost";
$usuario ="root";
$senha ="pwdpwd";
$bd ="hortifrutti";

$conexao = new PDO("$sgbd:host=$host;dbname=$bd", $usuario, $senha);

?>