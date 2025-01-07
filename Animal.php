<?php
    class Animal {
        public $name;
    public $legs;
    public $blood;

    function __construct($name, $legs, $blood){
        $this->name = $name;
        $this->legs = $legs;
        $this->blood = $blood;
    }

    public function __tostring(): string {
        return "Name: ".$this->name."<br>"."legs: ".$this->legs."<br>"."Cold Blooded: ".$this->blood."<br>";
    }

    }
?>