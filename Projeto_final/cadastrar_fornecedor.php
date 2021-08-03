<?php
    include "classeFornecedor.php";
    include "classeFormulario.php";
    include "conexao.php";

    if(!empty($_POST)){        
        $id_fornecedor = $_POST["id_fornecedor"];
        $cnpj = $_POST["cnpj"];
        $telefone = $_POST["telefone"];
        $nome = $_POST["nome"];
        $sql = "INSERT INTO fornecedor VALUES('$id_fornecedor','$cnpj','$telefone','$nome')";
        $conexao->query($sql);
        //Mensagem de Inserção SUCESSO - Onde essa MSG vai?
        //Preciso abrir uma div na HOME.PHP P/ ela aparecer... Alô Marcos
        //Já vi que ela vai p cima da minha caixa de cadastro
        echo "<span class='ok'>Fornecedor inserido com sucesso</span><br />";
    }

    //Método de Envio
    $v["method"]="post";
    $v["action"]="#";
    $v["titulo"]="Cadastro de Fornecedor";

    //Iniciando a construção - Blocos
    $f = new Formulario($v);

    $v = null;
    $v["type"]="text";
    $v["name"]="id_fornecedor";
    $v["placeholder"]="Digite o ID do Fornecedor:";
    $v["id"]="id_fornecedor";
    $v["class"]="form_fornecedor";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="cnpj";
    $v["placeholder"]="Digite o CNPJ:";
    $v["id"]="cnpj";
    $v["class"]="form_fornecedor";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="telefone";
    $v["placeholder"]="Digite o Telefone:";
    $v["id"]="telefone";
    $v["class"]="form_fornecedor";
    $i = new Input($v);    

    $f->adiciona_elemento($i);


    $v = null;
    $v["type"]="text";
    $v["name"]="nome";
    $v["placeholder"]="Digite o nome do Fornecedor:";
    $v["id"]="nome";
    $v["class"]="form_fornecedor";
    $i = new Input($v);    

    $f->adiciona_elemento($i);


    //Botões e término
    $v = null;
    $v["type"]="submit";
    $v["name"]="input";
    $v["value"]="Enviar";
    $i = new Input($v);

    $f->adiciona_elemento($i);
    $f->exibir();
?>