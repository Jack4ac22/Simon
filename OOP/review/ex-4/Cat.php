<?php

/**
 * You work for a local animal shelter. You must redesign their website.
 * You have to create a class named Cat() with the following properties:
 *	- Name (string - 3 to 20 characters)
 *	- Age (int)
 *	- Color (string - 3 to 10 characters)
 *	- Sex (string - male or female)
 *	- Breed (string - 3 to 20 characters)
 */
class Cat
{
    private $Name;
    private $Age;
    private $Color;
    private $Sex;
    private $Breed;

    function __construct($name, $age,  $color, $sex, $breed)
    {
        $this->set_name($name);
        $this->set_age($age);
        $this->set_color($color);
        $this->set_sex($sex);
        $this->set_breed($breed);
    }

    public function set_name($newName)
    {
        // Make sure the Name  (string - 3 to 20 characters)
        if (is_string($newName) && (strlen($newName) < 20) && (strlen($newName) > 3)) {
    
            $this->Name = $newName;
        } else {
            echo 'Name must be a string';
        }
    }

    public function set_color($newColor)
    {
        // Make sure the Color (string - 3 to 10 characters)
        if (is_string($newColor) && (strlen($newColor) < 10) && (strlen($newColor) > 3))
            $this->Color = $newColor;
        else
            echo 'Color must be a string';
    }
    public function set_age($newAge)
    {
        // Make sure the Age (int)
        if (is_numeric($newAge))
            $this->Age = (int) $newAge;
        else
        echo 'Age must be a Numeric';
    }

    public function set_sex($newSEX)
    {
        // Make sure the Color (string - 3 to 10 characters)
        if (is_string($newSEX) && (($newSEX === 'male') || ($newSEX === 'female')))
            $this->Sex = $newSEX;
            
        else
            echo 'Sex must be either male or female' . $newSEX;
    }

    public function set_breed($newBreed)
    {
        // Make sure the Name  (string - 3 to 20 characters)
        if (is_string($newBreed) && (strlen($newBreed) < 20) && (strlen($newBreed) > 3))
            $this->Breed = $newBreed;
        else
        echo 'Breed must be a string';
    }


    public function getInfos()
    {
        // $properties = array();

        $properties =  array(
            $this->Name,
            $this->Age,
            $this->Color,
            $this->Sex,
            $this->Breed,
        );

        return $properties;
    }
    public function __tostring()
    {
        $data = $this->Name . $this->Age . $this->Color . $this->Sex . $this->Breed;
        return $data;
    }
}
