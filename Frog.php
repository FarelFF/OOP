<?php
require_once "Animal.php";

class Frog extends Animal {
    public function __construct(){
        parent::__construct(name: "buduk", legs: "4", blood:"No");
    }

    public function jump(): string {
        return "Hop hop";
    }

    public function __tostring(): string {
        return parent::__tostring()."jump : ".$this->jump();
    }
}
$frog = new Frog()
?>