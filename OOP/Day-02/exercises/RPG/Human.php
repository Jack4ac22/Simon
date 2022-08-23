<?php
require_once 'Equipment.php';
require_once 'Character.php';


class Human extends Character

{
    public $name;

    public function __construct($name)
    {
        parent::__construct($name, 'Human');
    }


    public function __toString()
    {
        if (count($this->equipment) > 0) {
            foreach ($this->equipment as $weapon) {
                $equipmentHeld = ' I hold a ' . $weapon->type . 'it is calles' . $weapon->name;
            }
        } else $equipmentHeld = '';
        return 'Hi, This is ' . $this->name . 'I am a ' . $this->health . 'my attack points: ' . $this->attack . 'and my defense points:' . $this->defense . $equipmentHeld . '<br>';
    }

    public function attack($emeny)
    {
        if (isset($enemy)) {
            if (count($this->equipment) === 0) {
                $newAttack = $this->attack + 3;
                $newHealth = $enemy->health - $newAttack;
                $enemy->health = $newHealth;
            } else {
                $newHealth = $enemy->health - $this->attack;
                $enemy->health = $newHealth;
            }
        } else echo 'you can not attack imagenary opponent.';
    }

    public function usePower()
    {
        if (!isset($this->specialPower)) {
            $newHealth = $this->health + 20;
            $this->health = $newHealth;
            $this->specialPower = 'used';
        }
    }
}
