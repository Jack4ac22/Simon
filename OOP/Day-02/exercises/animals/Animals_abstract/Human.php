<?php

class Human extends LivingBeing
{

    public function work()
    {
        echo $this->name . ' is working<br>';
    }

    public function make_nois()
    {
        echo 'Hello, my name is ' . $this->name . '<br>';
    }
}
