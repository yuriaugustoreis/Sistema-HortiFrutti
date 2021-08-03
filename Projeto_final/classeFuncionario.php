<?php

    // Criando a Classe Funcionario
    class Funcionario {
        
        public $id_atribuicao;
        public $fruta_responsavel;
        public $nome;
        public $telefone;
        public $cpf;
        public $salario;
        public $datanascimento;

    public function __construct($valores){

        $this->id_atribuicao = $valores["id_atribuicao"];
        $this->fruta_responsavel = $valores["fruta_responsavel"];
        $this->nome = $valores["nome"];
        $this->telefone = $valores["telefone"];
        $this->cpf = $valores["cpf"];
        $this->salario = $valores["salario"];
        $this->datanascimento = $valores["datanascimento"];
        
    }

    public function exibir(){
        //ID para controle de todo conteúdo dentro daqui \/
        //Não posso usar ID ATRIBUIÇÃO decorrente o REMOVER... se manter, ele vai apagar tudo
        //Tentei usar o CPF mais não abria a caixa do span... por que será? (Chave primária?)
    echo "<div id='funcionario_controle$this->nome'>";
    echo "<form id='form$this->nome'>";
     echo "<input type='hidden' name='none' value='$this->nome'>";
        echo"<div class='container'>";
            echo"<div class='row'>";
                echo"<div class='col-3'>";
                    echo "ID Atribuição: <span id='id_atribuicao$this->nome'>$this->id_atribuicao</span><br>";
                echo"</div>";
                echo"<div class='col-6'>";
                    echo "Funcionário: <span id='nome$this->nome'>$this->nome</span><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                    echo "Fruta Responsável: <span id='fruta_responsavel$this->nome'>$this->fruta_responsavel</span><br>";
                echo"</div>";
            echo"</div>";
            echo"<div class='row'>";
                echo"<div class='col-3'>";
                    echo "Telefone: <span id='telefone$this->nome'>$this->telefone</span><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                    echo "CPF: <span id='cpf$this->nome'>$this->cpf</span><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                    echo "Salário: <span id='salario$this->nome'>$this->salario</span><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                    echo "Data de Nascimento: <span id='datanascimento$this->nome'>$this->datanascimento</span><br><br>";
                echo"</div>";
            echo"</div>";
            echo "<button type='button' class='alterarfuncionario btn btn-outline-primary' value='$this->nome'>Alterar</button>
                <button type='button' class='alterandofuncionario btn btn-outline-primary' value='$this->nome' style='display:none'>Alterar</button> 
                <button class='removerfuncionario btn btn-outline-danger' value='$this->nome'>Remover</button>";

    //ID para botão de Alterando (Depois do alterar aparece outro botão...)
    //Trabalhando tudo dentro de container genérico (SPAN ID) para modificação na hora do Alterar
        echo "</div>";
        echo "<hr>";
        echo "</form>";
        echo "</div>";
    }
}


?>