<?php

    // Criando a Classe Fornecedor
    class Fornecedor {
        
        public $id_fornecedor;
        public $nome;
        public $cnpj;
        public $telefone;

    public function __construct($valores){

        $this->id_fornecedor = $valores["id_fornecedor"];
        $this->nome = $valores["nome"];
        $this->cnpj = $valores["cnpj"];
        $this->telefone = $valores["telefone"];

    }

    public function exibir(){
    //ID para controle de todo conteúdo dentro daqui \/
    echo "<div id='fornecedor_controle$this->id_fornecedor'>";
    echo "<form id='form$this->id_fornecedor'>";
    //ID para botão de Alterando (Depois do alterar aparece outro botão...)
    echo "<input type='hidden' name='none' value='$this->id_fornecedor'>";
        echo"<div class='container'>";
        echo"<div class='row'>";
            echo"<div class='col-3'>";
                echo "ID Fornecedor: <span id='id_fornecedor$this->id_fornecedor'>$this->id_fornecedor</span><br>";
            echo"</div>";
            echo"<div class='col-3'>";
                echo "CNPJ: <span id='cnpj$this->id_fornecedor'>$this->cnpj</span><br>";
            echo"</div>";
            echo"<div class='col-3'>";
                echo "Telefone: <span id='telefone$this->id_fornecedor'>$this->telefone</span><br>";
            echo"</div>";
            echo"<div class='col-3'>";
            echo "Nome: <span id='nome$this->id_fornecedor'>$this->nome</span><br><br>";
            echo"</div>";
        echo"</div>";
        // Trabalhando tudo dentro de container genérico (SPAN ID) para modificação na hora do Alterar
        // Botão de Alterar e Remover 
        echo "<button type='button' class='alterarfornecedor btn btn-outline-primary' value='$this->id_fornecedor'>Alterar</button>
        <button type='button' class='alterandofornecedor btn btn-outline-primary' value='$this->id_fornecedor' style='display:none'>Alterar</button> 
        <button class='removerfornecedor btn btn-outline-danger' value='$this->id_fornecedor'>Remover</button>";
        //Display none do alterando por que primeiro exibe o alterar, e após o click exibe o alterando...
        echo "<hr>";
        echo "</form>";
        echo "</div>";
    }
}


?>