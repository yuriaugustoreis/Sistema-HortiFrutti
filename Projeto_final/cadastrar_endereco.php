<?php

    include "classeFormulario.php";
    include "classeEndereco.php";
    include "conexao.php";

    if(!empty($_POST)){
        $id_endereco = $_POST["id_endereco"];
        $nome_funcionario = $_POST["nome_funcionario"];
        $cep = $_POST["cep"];
        $logradouro = $_POST["logradouro"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];
        $complemento = $_POST["complemento"];
        $localidade = $_POST["localidade"];
        $sql = "INSERT INTO endereco VALUES('$id_endereco','$nome_funcionario','$cep','$logradouro','$numero','$bairro','$complemento', '$localidade')";
        $conexao->query($sql);
        echo "<span class='ok'>Endereço inserido com sucesso</span><br />";
    }

    //Método de Envio
    $v["method"]="post";
    $v["action"]="#";
    $v["titulo"]="Cadastro de Endereço - Funcionário";

    //Iniciando a construção - Blocos
    $f = new Formulario($v);

    //Para adicionar um endereço, precisa ANTES adicionar um funcionário..
    //Mudo o BD ou altero a sequencia de menu - Cadastro?
    $v = null;
    $v["name"]="nome_funcionario";
    $ol["label_select"] = "Selecione o Funcionário";

    $sql = "SELECT * FROM funcionario ORDER BY nome";
    $resultado = $conexao->query($sql) or die("Erro!!");

   
    foreach($resultado as $i=>$t){
        $options[$i]["value"]=$t["nome"];
        $options[$i]["label_option"]=$t["nome"];        
    }
    

    $s = new Select($v,$ol,$options);
    $f->adiciona_elemento($s);

    $v = null;
    $v["type"]="text";
    $v["name"]="id_endereco";
    $v["placeholder"]="Digite o ID do Endereço:";
    $v["id"]="id_endereco";
    $v["class"]="form_endereco";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="cep";
    $v["placeholder"]="Digite o CEP:";
    $v["id"]="cep";
    $v["class"]="form_endereco";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="logradouro";
    $v["placeholder"]="Logradouro:";
    $v["id"]="logradouro";
    $v["class"]="form_endereco";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="number";
    $v["name"]="numero";
    $v["placeholder"]="Digite o Número:";
    $v["id"]="numero";
    $v["class"]="form_endereco";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="bairro";
    $v["placeholder"]="Digite o Bairro:";
    $v["id"]="bairro";
    $v["class"]="form_endereco";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="complemento";
    $v["placeholder"]="Digite o Complemento:";
    $v["id"]="complemento";
    $v["class"]="form_endereco";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="localidade";
    $v["placeholder"]="Digite a Localidade:";
    $v["id"]="localidade";
    $v["class"]="form_endereco";
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