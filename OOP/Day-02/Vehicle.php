<?php class Vehicle
{
    // passed properties to children.
    protected $numberOfWheels;
    protected $manufacturer;


    public function __construct($wn, $m)
    {
        $this->$numberOfWheels = $wn;
        $this->$manufacturer = $m;
    }
}
$myV = new Vehicle(3, 'car');

class Car extends Vehicle
{
    public function __construct()
    {
        parent::__construct($wn, $m);
    }
}

$mycar = new Car(4, 'sas');

print_r($mycar);
print_r($myV);
