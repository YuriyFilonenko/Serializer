<?php

namespace App;

/**
 * Interface for convert object to associative array
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
interface PersonInterface
{
    /**
     * Convert object to associative array
     *
     * @return array
     */
    public function objectToArray(): array;
}
