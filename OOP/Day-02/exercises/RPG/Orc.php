<?php
require_once 'Equipment.php';
require_once 'Character.php';

class Orc extends Character
{
    public function __construct($name)
    {
        parent::__construct($name, 'Orc');
    }

    public function attack($emeny)
    {
        if (isset($enemy)) {
            if ($enemy->type === 'Elf') {
                $newHealth = $enemy->health - 50;
                $enemy->health = $newHealth;
            } else {
            }
        }
    }
}
