<?php

require_once("Cargo.php");

class Gerente extends Cargo{

    public function getCargo(){
        return "Gerente";
    }
    
    public function getSalario(){
        return 2000 * 4.5;
        
    }

}