<?php

namespace Flower\namespace;

class Flower
{
    public $id;
    public $name;
    public $price;

    // Setters
    public function set_id($newId)
    {
        if (is_numeric($newId))
            $this->id = $newId;
    }

    public function set_name($newName)
    {
        if (is_string($newName))
            $this->name = $newName;
    }

    public function set_price($newPrice)
    {
        if (is_numeric($newPrice))
            $this->price = $newPrice;
    }

    // Getters
    public function get_id()
    {
        return $this->id;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_price()
    {
        return $this->price;
    }
}
