<?php

    include "classeFormulario.php";
    include "classeFuncionario.php";
    include "conexao.php";

    if(!empty($_POST)){        
        //Dois primeiros ID's somente para indentificação
        //Porém preciso passar eles porque no OPTION ele recebe o valor...
        $id_atribuicao = $_POST["id_atribuicao"];
        $fruta_responsavel = $_POST["fruta_responsavel"];
        //Aqui recebe os dados...
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $cpf = $_POST["cpf"];
        $salario = $_POST["salario"];
        $datanascimento = $_POST["datanascimento"];
        $sql = "INSERT INTO funcionario VALUES('$id_atribuicao','$fruta_responsavel','$nome','$telefone','$cpf','$salario','$datanascimento')";
        $conexao->query($sql);
        //Mensagem de Inserção SUCESSO - Onde essa MSG vai?
        //Preciso abrir uma div na HOME.PHP P/ ela aparecer... Alô Marcos
        //Já vi que ela vai p cima da minha caixa de cadastro
        echo "<span class='ok'>Funcionário inserido com sucesso</span><br />";
    }

    //Método de Envio
    $v["method"]="post";
    $v["action"]="#";
    $v["titulo"]="Cadastro de Funcionário";

    //Iniciando a construção - Blocos
    $f = new Formulario($v);

    //Para adicionar um endereço, precisa ANTES adicionar um funcionário..
    //Mudo o BD ou altero a sequencia de menu - Cadastro?
    $v = null;
    $v["name"]="id_atribuicao";
    $ol["label_select"] = "Selecione a Atribuição";

    $sql = "SELECT * FROM atribuicao ORDER BY id_atribuicao";
    $resultado = $conexao->query($sql) or die("Erro!!");

   
    foreach($resultado as $i=>$t){
        $options[$i]["value"]=$t["id_atribuicao"];
        $options[$i]["label_option"]=$t["id_atribuicao"];        
    }
    
    $s = new Select($v,$ol,$options);
    $f->adiciona_elemento($s);

    //Para adicionar um endereço, precisa ANTES adicionar um funcionário..
    //Mudo o BD ou altero a sequencia de menu - Cadastro?
    $v = null;
    $v["name"]="fruta_responsavel";
    $ol["label_select"] = "Selecione a Fruta Responsável";

    $sql = "SELECT * FROM fruta ORDER BY id_fruta";
    $resultado = $conexao->query($sql) or die("Erro!!");

   
    foreach($resultado as $i=>$t){
        $options[$i]["value"]=$t["id_fruta"];
        $options[$i]["label_option"]=$t["id_fruta"];  
    }
    
    $s = new Select($v,$ol,$options);
    $f->adiciona_elemento($s);

    $v = null;
    $v["type"]="text";
    $v["name"]="nome";
    $v["placeholder"]="Digite o Nome do Funcionário:";
    $v["id"]="nome";
    $v["class"]="form_funcionario";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="telefone";
    $v["placeholder"]="Digite o Telefone:";
    $v["id"]="telefone";
    $v["class"]="form_funcionario";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="cpf";
    $v["placeholder"]="Digite o CPF:";
    $v["id"]="cpf";
    $v["class"]="form_funcionario";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="number";
    $v["name"]="salario";
    $v["placeholder"]="Digite o Salário:";
    $v["id"]="salario";
    $v["class"]="form_funcionario";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="datanascimento";
    $v["placeholder"]="Digite a Data de Nascimento:";
    $v["id"]="datanascimento";
    $v["class"]="form_funcionario";
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