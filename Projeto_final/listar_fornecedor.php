<?php

// include "home.php";
include "classeFornecedor.php";
include "conexao.php";

//mostrando todas informações... puxando tudo!
$sql = "SELECT * FROM fornecedor";

//query de conexão
$resultado = $conexao->query($sql) or die(print_r($conexao->errorInfo()));

if($resultado->rowCount()>0){
    foreach($resultado as $i=>$t){
        //foreach percorrendo todas as colunas do bd
        $c = new Fornecedor ($t);   
        $c->exibir();
    }
} else {
    echo "Não há dados cadastrados";
}

?>