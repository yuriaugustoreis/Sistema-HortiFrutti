<?php

    // Criando a Classe Fruta
    class Fruta {
        
        public $id_fruta;
        public $nome_fruta;
        public $valor;
        public $quantia;
        public $datachegada;

    public function __construct($valores){

        $this->id_fruta = $valores["id_fruta"];
        $this->nome_fruta = $valores["nome_fruta"];
        $this->valor = $valores["valor"];
        $this->quantia = $valores["quantia"];
        $this->datachegada = $valores["datachegada"];
        
    }

    public function exibir(){
        //ID para controle de todo conteúdo dentro daqui \/
        //ID da fruta também se repete.. não pode ser usado!
        //Usarei o nome
        echo "<div id='fruta_controle$this->nome_fruta'>";
        echo "<form id='form$this->nome_fruta'>";
        //ID para botão de Alterando (Depois do alterar aparece outro botão...)
        echo "<input type='hidden' name='none' value='$this->nome_fruta'>";
        // Trabalhando tudo dentro de container genérico (SPAN ID) para modificação na hora do Alterar
            echo"<div class='container'>";
            echo"<div class='row'>";
                echo"<div class='col-3'>";
                    echo "ID Fruta: <span id='id_fruta$this->nome_fruta'>$this->id_fruta</span><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                    echo "Nome da Fruta: <span id='nome_fruta$this->nome_fruta'>$this->nome_fruta</span><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                    echo "Valor R$: <span id='valor$this->nome_fruta'>$this->valor</span><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                echo "Quantia: <span id='quantia$this->nome_fruta'>$this->quantia</span><br>";
                echo"</div>";
            echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-3'>";
                    echo "Data de Chegada: <span id='datachegada$this->nome_fruta'>$this->datachegada</span><br><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                    //Nenhuma Informação
                echo"</div>";
                echo"<div class='col-3'>";
                    //Nenhuma Informação
                echo"</div>";
                echo"<div class='col-3'>";
                    //Nenhuma Informação
                echo"</div>";
             echo"</div>";
        //Botões
        echo "<button type='button' class='alterarfruta btn btn-outline-primary' value='$this->nome_fruta'>Alterar</button>
        <button type='button' class='alterandofruta btn btn-outline-primary' value='$this->nome_fruta' style='display:none'>Alterar</button> 
        <button class='removerfruta btn btn-outline-danger' value='$this->nome_fruta'>Remover</button>";
            echo"</div>";
        echo "<hr>";
        echo "</form>";
        echo "</div>";
    }
}


?>