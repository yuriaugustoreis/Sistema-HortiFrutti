<?php
    include "classeFormulario.php";
    include "conexao.php";

    if(!empty($_POST)){        
        $id_atribuicao = $_POST["id_atribuicao"];
        $titulo_funcao = $_POST["titulo_funcao"];
        $sql = "INSERT INTO atribuicao VALUES('$id_atribuicao','$titulo_funcao')";
        $conexao->query($sql);
        //Mensagem de Inserção SUCESSO - Onde essa MSG vai?
        //Preciso abrir uma div na HOME.PHP P/ ela aparecer... Alô Marcos
        //Já vi que ela vai p cima da minha caixa de cadastro
        echo "<span class='ok'>Atribuição inserida com sucesso</span><br />";
    }

    //Método de Envio
    $v["method"]="post";
    $v["action"]="#";
    $v["titulo"]="Cadastro de Atribuição";

    //Iniciando a construção - Blocos
    $f = new Formulario($v);

    $v = null;
    $v["type"]="text";
    $v["name"]="id_atribuicao";
    $v["placeholder"]="Digite o ID da Atribuição:";
    $v["id"]="id_atribuicao";
    $v["class"]="form_atribuicao";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="titulo_funcao";
    $v["placeholder"]="Digite o título da Atribuição:";
    $v["id"]="titulo_funcao";
    $v["class"]="form_atribuicao";
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