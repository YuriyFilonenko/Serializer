<?php

namespace App;

/**
 * Implements logic for convert object to associative array
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
class Person implements PersonInterface
{
    private $firstName;
    private $lastName;
    private $age;
    
    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }
    
    /**
     * Convert object to associative array
     *
     * @return array
     */
    public function objectToArray(): array
    {
        $array = [];
        foreach ($this as $key => $value) {
            $array[$key] = $value;
        }
        return $array;
    }
}
