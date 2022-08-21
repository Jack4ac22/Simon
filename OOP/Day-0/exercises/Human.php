<?php
class Human
{
    private $name;
    public $hairColor;
    private $gender;
    public $height;


    function __construct($name, $hairColor, $gender, $height)
    {
        $this->$name = $name;
        $this->$hairColor = $hairColor;
        $this->$gender = $gender;
        $this->$height = $height;
    }

    function __toString()
    {
        return "Name is: $this->name<br>
        Hair Color: $this->hairColor<br>
        Gender: $this->gender<br>
        Height: $this->height<br>";
    }
}

/*
An human is represented by a name, an haircolor, a gender and a height.

Create the matching class.
The name should not be editable after creation of the object.

Create two different object from this class.
Display the two objects properties using tostring.

*/