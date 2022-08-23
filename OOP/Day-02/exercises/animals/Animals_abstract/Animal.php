<?php

abstract class Animal extends LivingBeing
{
    // Because I will use inheritance, properties has to be public or protected
    public $nbLegs;

    public function __construct($n, $c, $g, $l)
    {
        parent::__construct($n, $c, $g);
        $this->nbLegs = $l;
    }
}
