<?php

namespace App;

use Symfony\Component\Yaml\Yaml;

class YamlSerializer
{
    public function serialize($object)
    {
        $array = $object->objectToArray();
     
        return Yaml::dump($array);
    }
}
