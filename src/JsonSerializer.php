<?php

namespace App;

class JsonSerializer
{
    public function serialize(PersonInterface $object): string
    {
        $array = $object->objectToArray();
        
        return json_encode($array);
    }
}
