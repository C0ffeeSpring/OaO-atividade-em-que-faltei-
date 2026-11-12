<?php

require_once("Cargo.php");

class Desenvolvedor extends Cargo{

    public function getCargo(){
        return "Desenvolvedor(a)";
    }
    
    public function getSalario(){
        return 2000 * 2.3;
        
    }

}