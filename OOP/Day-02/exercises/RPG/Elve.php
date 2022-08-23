<?php
class Elve
{
    public $name;
    public $health;
    public $attack;
    public $Defense;

    public function __construct($name)
    {
        $this->name = $name;
        $this->attack = 10;
        $this->Defense = 5;
        $this->health = 100;
    }
}
