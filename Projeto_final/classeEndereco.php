<?php

    // Criando a Classe Endereço
    class Endereco {
        
        public $id_endereco;
        public $nome_funcionario;
        public $cep;
        public $rua;
        public $numero;
        public $bairro;
        public $localidade;
        //Deixando de inínio o complemento vazio
        public $complemento=null;


    public function __construct($valores){

        $this->id_endereco = $valores["id_endereco"];
        $this->nome_funcionario = $valores["nome_funcionario"];
        $this->cep = $valores["cep"];
        $this->logradouro = $valores["logradouro"];
        $this->numero = $valores["numero"];
        $this->bairro = $valores["bairro"];
        $this->localidade = $valores["localidade"];
        //Complemento pode ou não ser vazio....
        if(isset($valores["complemento"])){
            $this->complemento = $valores["complemento"];
        } 
        

    }

    public function exibir(){
        //ID para controle de todo conteúdo dentro daqui \/
        echo "<div id='endereco_controle$this->id_endereco'>";
        echo "<form id='form$this->id_endereco'>";
        //ID para botão de Alterando (Depois do alterar aparece outro botão...)
        echo "<input type='hidden' name='none' value='$this->id_endereco'>";
        // Trabalhando tudo dentro de container genérico (SPAN ID) para modificação na hora do Alterar
        echo"<div class='container'>";
            echo"<div class='row'>";
                echo"<div class='col-3'>";
                    echo "CEP: <span id='cep$this->id_endereco'>$this->cep</span><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                    echo "Funcionário: <span id='nome_funcionario$this->id_endereco'>$this->nome_funcionario</span><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                    echo "ID Endereço: <span id='id_endereco$this->id_endereco'>$this->id_endereco</span><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                    echo "Logradouro: <span id='logradouro$this->id_endereco'>$this->logradouro</span><br>";
                echo"</div>";
                echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-3'>";
                    echo "Número: <span id='numero$this->id_endereco'>$this->numero</span><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                    echo "Bairro: <span id='bairro$this->id_endereco'>$this->bairro</span><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                    echo "Complemento: <span id='complemento$this->id_endereco'>$this->complemento</span><br><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                    echo "Localidade: <span id='localidade$this->id_endereco'>$this->localidade</span><br><br>";
                echo"</div>";
            echo"</div>";
        echo "<button type='button' class='alterarendereco btn btn-outline-primary' value='$this->id_endereco'>Alterar</button>
        <button type='button' class='alterandoendereco btn btn-outline-primary' value='$this->id_endereco' style='display:none'>Alterar</button> 
        <button class='removerendereco btn btn-outline-danger' value='$this->id_endereco'>Remover</button>";
        echo "<hr>";
        echo "</form>";
        echo "</div>";
    }
}


?>