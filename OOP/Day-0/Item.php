<?php
class Item
{
    // properties
    private $name;
    private $description;

    // functions

    // adding geeter method for the private property
    public function getName()
    {
        return $this->name;
    }


    // adding setter method for the private property
    public function setName($name)
    {
        $this->name - $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}
