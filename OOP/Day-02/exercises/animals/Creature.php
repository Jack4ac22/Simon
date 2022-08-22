<?php


class Creature
{
    protected $numberOfLegs;
    protected $color;
    protected $gender;
    protected $name;

    function __construct($numberOfLegs, $color, $gender, $name)
    {
        $this->numberOfLegs = $numberOfLegs;
        $this->color = $color;
        $this->gender = $gender;
        $this->name = $name;
    }

    public function __toString()
    {
        return "$this->name has $this->numberOfLegs legs, it is $this->color $this->gender.";
    }
}

class Dog extends Creature
{

    public function bark()
    {
        echo "<p>barking dog...</p>";
    }
}
$myDog = new Dog(3.5, 'yellow', 'female', 'Mokka');

echo $myDog;
$myDog->bark();

class Cat extends Creature
{
    public function meow()
    {
        echo "<p>Mewo...Mewo</p>";
    }
}
$myCat = new Cat(4, 'black', 'male', 'smashed');

echo $myCat;
$myCat->meow();


class Human extends Creature
{
    function __construct($gender, $name, $hairColor)
    {
        parent::__construct(2, null, $gender, $name);
        $this->hairColor = $hairColor;
    }

    public function __toString()
    {
        if ($this->gender === 'male') {
            return "$this->name is a  $this->gender who has $this->numberOfLegs legs, he has $this->hairColor.";
        }
        if ($this->gender === 'female') {
            return "$this->name is a  $this->gender who has $this->numberOfLegs legs, she has $this->hairColor.";
        }
    }
}
$sabrina = new Human('female', 'Sabrina', 'blond');
echo $sabrina;
