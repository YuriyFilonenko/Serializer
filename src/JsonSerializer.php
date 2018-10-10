<?php

namespace App;

/**
 * Implements logic for serialize object to Json format
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
class JsonSerializer
{
    /**
     * @param object
     *
     * @return string Return string in Json format
     */
    public function serialize(PersonInterface $object): string
    {
        $array = $object->objectToArray();
        
        return json_encode($array);
    }
}
