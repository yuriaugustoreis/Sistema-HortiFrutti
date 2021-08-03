<?php

    // Começando a criação das classes... fazendo a classe PAI
     class Entrada{
        public $name;
        public $class;
        public $id;
        public $placeholder;

        // Construct... colocando na frente ( ?? "" ) por que as vezes está vazio, assim faz com que não dê erro e o programa aceite.
        public function __construct($valores){
            $this->name = $valores["name"];
            $this->class = $valores["class"] ?? "";
            $this->id = $valores["id"] ?? "";
            $this->placeholder = $valores["placeholder"] ?? "";
        }
    }
?>