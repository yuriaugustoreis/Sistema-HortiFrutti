<?php
    include "classeFornecedor.php";
    include "classeFormulario.php";
    include "conexao.php";

    if(!empty($_POST)){        
        $id_fruta = $_POST["id_fruta"];
        $nome = $_POST["nome"];
        $valor = $_POST["valor"];
        $quantia = $_POST["quantia"];
        $datachegada = $_POST["datachegada"];
        $sql = "INSERT INTO fruta VALUES('$id_fruta','$nome','$valor','$quantia','$datachegada')";
        $conexao->query($sql);
        //Mensagem de Inserção SUCESSO - Onde essa MSG vai?
        //Preciso abrir uma div na HOME.PHP P/ ela aparecer... Alô Marcos
        //Já vi que ela vai p cima da minha caixa de cadastro
        echo "<span class='ok'>Fornecedor inserido com sucesso</span><br />";
    }

    //Método de Envio
    $v["method"]="post";
    $v["action"]="#";
    $v["titulo"]="Cadastro de Frutas";

    //Iniciando a construção - Blocos
    $f = new Formulario($v);

    $v = null;
    $v["type"]="text";
    $v["name"]="id_fruta";
    $v["placeholder"]="Digite o ID da Fruta:";
    $v["id"]="id_fruta";
    $v["class"]="form_fruta";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="nome";
    $v["placeholder"]="Digite o Nome:";
    $v["id"]="nome";
    $v["class"]="form_fruta";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="valor";
    $v["placeholder"]="Digite o Valor:";
    $v["id"]="valor";
    $v["class"]="form_fruta";
    $i = new Input($v);    

    $f->adiciona_elemento($i);


    $v = null;
    $v["type"]="text";
    $v["name"]="quantia";
    $v["placeholder"]="Digite a Quantia:";
    $v["id"]="quantia";
    $v["class"]="form_fruta";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="datachegada";
    $v["placeholder"]="Digite a Data de Chegada:";
    $v["id"]="datachegada";
    $v["class"]="form_fruta";
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