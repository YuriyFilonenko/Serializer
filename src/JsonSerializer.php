<?php

namespace App;

class JsonSerializer
{
    public function serialize($object)
    {
        $array = $object->objectToArray();
        
        return json_encode($array);
    }
}
