<?php 

class pokemon {
    public $name;
    public $type;

    function __construct($name, $type) {
        $this->name = $name;
        $this->type = $type;
    }

    function attack() {
        echo "$this->name has attacked the enemy";
    }
    function getInfo() {
        return "$this->name is a $this->type type";
    }
}

$leafeon = new pokemon("Leafeon", "Grass");
$leafeon->attack();
echo "\n";
echo $leafeon->getInfo();