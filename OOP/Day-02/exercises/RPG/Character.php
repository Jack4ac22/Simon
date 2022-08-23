<?php
require_once 'Equipment.php';

class Character
{
    private $type;
    public $name;
    protected $attack = 10;
    protected $defense = 5;
    protected $health = 100;
    protected $equipment = [];
    protected $specialPower = null;

    public function __construct($name, $type)
    {
        if ($type === 'Human' || $type === 'Orc' || $type === 'Elf') {
            $this->name = $name;
            $this->type = $type;
        } else {
            return 'Type can only be Humans, Orcs, Elves';
        }
    }

    public function __toString()
    {
        if (count($this->equipment) > 0) {
            foreach ($this->equipment as $weapon) {
                $equipmentHeld = ' I hold a ' . $weapon->type . 'it is calles' . $weapon->name;
            }
        } else $equipmentHeld = '';
        return 'Hi, This is ' . $this->name . 'I am a ' . $this->type . ',I have ' . $this->health . 'my attack points: ' . $this->attack . 'and my defense points:' . $this->defense . $equipmentHeld . '<br>';
    }
    public function holding($equipment)
    {
        if (isset($equipment)) {
            array_push($this->equipment, $equipment);
            $newHealth = $this->health + $equipment->bonus_health;
            $this->health = $newHealth;
            $newAttack = $this->attack + $equipment->bonus_attack;
            $this->attack = $newAttack;
            $newDefense = $this->defense + $equipment->bonus_defense;
            $this->defense = $newDefense;
        } else {
            return 'please chose some existing equipment.';
        }
    }
}
