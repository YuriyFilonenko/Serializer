<?php

namespace App;

use Symfony\Component\Yaml\Yaml;

/**
 * Implements logic for serialize object to Yaml format
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
class YamlSerializer
{
    /**
     * @param object
     *
     * @return string Return string in Yaml format
     */
    public function serialize(PersonInterface $object): string
    {
        $array = $object->objectToArray();
     
        return Yaml::dump($array);
    }
}
