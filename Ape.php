<?php
require_once "Animal.php";
 
class Ape extends Animal {

    public function __construct(){
        parent::__construct(name: "Kera Sakti", legs: "2", blood: "No");
    }
    public function yell(): string {
        return "Auuooooo";
    }
    public function __tostring(): string {
        return parent::__tostring()."yell: ".$this->yell();
    }
    
    }
    
    $ape = new Ape()


?>