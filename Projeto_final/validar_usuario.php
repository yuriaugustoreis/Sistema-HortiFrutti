<?php 

    include "conexao.php";
    // Recebendo as informações do login.php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuario WHERE email='$usuario' AND senha='$senha'";

    $resultado = $conexao->query($sql) or die(print_r($conexao));

    if($resultado -> rowCount() == "1"){
        foreach($resultado as $i=>$l){
            $id_usuario = $l["id_usuario"];
        }
        session_start();
        //Mandando p página a autorização
        $_SESSION["autorizado"] = $id_usuario;
        header("location: home.php");
    }

    else {
        header("location: login.php?erro=1");
    }

?>