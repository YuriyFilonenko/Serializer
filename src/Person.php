<?php

namespace App;

class Person implements PersonInterface
{
    private $firstName;
    private $lastName;
    private $age;
    
    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }
    
    public function objectToArray()
    {
        $array = [];
        foreach ($this as $key => $value) {
            $array[$key] = $value;
        }
        return $array;
    }
}
