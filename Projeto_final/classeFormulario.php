<?php

    // Chamando o Exibir (InterfaceExibicao) e os inputs!
    require_once "interfaceExibicao.php";
    require_once "classeInput.php";
    require_once "classeSelect.php";
    require_once "classeTextArea.php";

    // Classe que chama o Exibição (Somente método de exibir)
    class Formulario implements Exibicao {

        public $method;
        public $action;
        public $titulo;
        public $elementos_form;

    // Construct
        public function __construct($valores){
            $this->method = $valores["method"];
            $this->action = $valores["action"];
            $this->titulo = $valores["titulo"];
        }

        public function adiciona_elemento($e){
            $this->elementos_form[] = $e;
        }

        // Dentro de cada exibir, um formulário é gerado para controle...
        public function exibir(){
            echo "<div class='container p-3 my-3 bg text-white' style='background-color:orange; text-align: center'<legend>Formulário: $this->titulo</legend></div>";
            echo "<form method='$this->method' action='$this->action'>";
            foreach($this->elementos_form as $i=>$e){
                echo "<div class='form'>";
                $e->exibir();
                echo "</div>";
            }
                echo "</form>";
        }
    }
?>