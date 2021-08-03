<?php

    // Criando a Classe Atribuição
    class Atribuicao {
        
        public $id_atribuicao;
        public $titulo_funcao;


    public function __construct($valores){

        $this->id_atribuicao = $valores["id_atribuicao"];
        $this->titulo_funcao = $valores["titulo_funcao"];

    }

    public function exibir(){
        //ID para controle de todo conteúdo dentro daqui \/
        echo "<div id='atribuicao_controle$this->id_atribuicao'>";
        echo "<form id='form$this->id_atribuicao'>";
        //ID para botão de Alterando (Depois do alterar aparece outro botão...)
        echo "<input type='hidden' name='none' value='$this->id_atribuicao'>";
            echo"<div class='container'>";
            echo"<div class='row'>";
                echo"<div class='col-3'>";
                    echo "ID Atribuição: <span id='id_atribuicao$this->id_atribuicao'>$this->id_atribuicao</span><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                    echo "Título da Função: <span id='titulo_funcao$this->id_atribuicao'>$this->titulo_funcao</span><br><br>";
                echo"</div>";
                echo"<div class='col-3'>";
                //Nenhuma Informação
                echo"</div>";
                echo"<div class='col-3'>";
                //Nenhuma Informação
                echo"</div>";
            echo"</div>";
        // Trabalhando tudo dentro de container genérico (SPAN ID) para modificação na hora do Alterar
        echo "<button type='button' class='alteraratribuicao btn btn-outline-primary' value='$this->id_atribuicao'>Alterar</button>
        <button type='button' class='alterandoatribuicao btn btn-outline-primary' value='$this->id_atribuicao' style='display:none'>Alterar</button> 
        <button class='removeratribuicao btn btn-outline-danger' value='$this->id_atribuicao'>Remover</button>";
        echo "<hr>";
        echo "</form>";
        echo "</div>";
    }
}


?>