<?php
class Flower
{
    private $id;
    private $name;
    private $price;
    private $picture;

    // function __construct($name, $price)
    // {
    //     $this->name = $name;
    //     $this->price = $price;
    // }

    function get_id()
    {
        return $this->id;
    }

    function set_id($new_id)
    {
        $this->id = $new_id;
    }

    function get_name()
    {
        return $this->name;
    }

    function set_name($new_name)
    {
        $this->name = $new_name;
    }

    function get_price()
    {
        return $this->price;
    }

    function set_price($new_price)
    {
        $this->price = $new_price;
    }

    function get_picture()
    {
        return $this->picture;
    }

    function set_picture($new_picture)
    {
        $this->picture = $new_picture;
    }
}
