<?php

namespace App;

use Symfony\Component\Yaml\Yaml;

class YamlSerializer
{
    public function serialize(PersonInterface $object): string
    {
        $array = $object->objectToArray();
     
        return Yaml::dump($array);
    }
}
