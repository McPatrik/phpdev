<?php
class Unit 
{
    public $count;
    public $health;
    public $armour; 
    public $damage;

    public function __construct($count, $health, $armour, $damage) {
        $this->count = $count;
        $this->damage = $damage;
        $this->health = $health;
        $this->armour = $armour;
    }
}
    class Army 

{
    public $nameArmy;
    public $units;
    public $nameUnit;

    public function __construct($nameArmy) {
         $this->nameArmy = $nameArmy;
    }

    public function addPehota($count) {

        $this->units["Pehota"] = new Unit($count, 100,10,10);
    }

    public function addLuchniki($count) {
        $this->units["Luchniki"] = new Unit($count, 100,5,20);
    }

    public function addKonnica($count) {
        $this->units["Konnica"] = new Unit($count, 300, 30, 30);
    }

    // public function getCountUnit($nameUnit) {
    // }
}
