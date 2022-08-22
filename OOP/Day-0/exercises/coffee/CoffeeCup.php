<?php
class CoffeeCup
{
    private $volume;
    private $quantity;
    private $brand;
    private $temperature;


    public function __construct(
        $volume,
        $brand,
        $temperature
    ) {
        $this->setVolume($volume);
        $this->brand = $brand;
        $this->temperature = $temperature;
        $this->quantity = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }
    private function setVolume($nVolume)
    {
        if (is_numeric($nVolume)) {
            if ($this->volume >= $this->quantity) {
                $this->volume = $nVolume;
            }
        }
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getBrand()
    {
        return $this->brand;
    }
    // private function setBrand($nBrand)
    // {
    //     if (is_string($nBrand)) {
    //         $this->brand = $nBrand;
    //     }
    // }

    public function getTemperature()
    {
        return $this->temperature;
    }
    public function reHeat($heating)
    {
        if (is_numeric($heating)) {
            $newTemperature = $this->temperature + $heating;
            $this->temperature = $newTemperature;
            echo "<p>your coffee temperature is $newTemperature ˚c now.</p>";
        }
    }

    public function coolDown($cooling)
    {
        if (is_numeric($cooling)) {
            $newTemperature = $this->temperature - $cooling;
            $this->temperature = $newTemperature;
            echo "<p>your coffee temperature is $newTemperature ˚c now.</p>";
        }
    }

    public function __toString()
    {
        return "<p>The order is a cup of coffe which is $this->quantity cl, of $this->brand brand, and it should be $this->temperature c˚.</p>";
    }

    public function sip($sip)
    {
        if ($this->quantity == 0) {
            echo 'your cup is empty.';
        } elseif ((is_integer($sip)) && ($this->quantity > $sip)) {
            $newQuantity = $this->quantity - $sip;
            $this->quantity = $newQuantity;
            echo "<p>You sipped $sip cl, left in your cup $newQuantity cl.</p>";
        } else {
            echo "<p>you do not have $sip cl in your cup, you could get $this->quantity cl and you are left with an empty cup.</p>";
            $this->quantity = 0;
        }
    }

    public function refill()
    {
        $addition = $this->volume - $this->quantity;
        $this->quantity = $this->volme;
        echo "<p>your cup is refilled with $addition, you have $this->volume</p>";
    }
}
