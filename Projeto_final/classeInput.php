<?php

    // Chamando classe PAI
    require_once "classeEntrada.php";

    class Input extends Entrada{
        public $type;
        // Step pode ou não ter... Se tiver, entra no IF do ISSET, caso contrário passa batido!
        public $step=null;

        public function __construct($valores){
            $this->type = $valores["type"]; 
            if(isset($valores["step"])){
                $this->step = $valores["step"];
            } 
            
            parent::__construct($valores);
        }

        // Montagem do Exibir
        public function exibir(){
            if($this->type == 'submit'){
                $classes = 'btn-block btn btn-primary';
            }else{
                $classes = ' form-control';
            }

            echo "<input type='$this->type' name='$this->name' class=' ".$this->class." ".$classes."' id='$this->id'";
            if($this->step!=null){
                echo " step='$this->step'";
            }
            echo "placeholder='$this->placeholder'  /><br />";
           
        }
    }

?>