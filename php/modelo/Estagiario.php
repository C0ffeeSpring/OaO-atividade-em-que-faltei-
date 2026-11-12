<?php

require_once("Cargo.php");

class Estagiario extends Cargo{

    public function getCargo(){
        return "Estagiario(a)";
    }
    
    public function getSalario(){
        return 2000 * 0.8;
        
    }

}