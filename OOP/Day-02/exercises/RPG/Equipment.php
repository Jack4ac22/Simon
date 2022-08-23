<?php
class Equipment
{
    public $name;
    public $type;
    public $bonus_attack;
    public $bonus_defense;
    public $bonus_health;

    public function __construct(
        $name,
        $type,
        $bonus_attack,
        $bonus_defense,
        $bonus_health
    ) {
        $this->name = $name;
        $this->$type = $type;
        $this->bonus_attack = $bonus_attack;
        $this->bonus_defense = $bonus_defense;
        $this->bonus_health = $bonus_health;
    }
    public function __toString()
    {
        return '-- equipment information -- ' . '<br>' . 'name' . $this->name . 'type' . $this->type . 'bonus_attack' . $this->bonus_attack . 'bonus_defense' . $this->bonus_defense . 'bonus_health' . $this->bonus_health . '<br>';
    }
}
