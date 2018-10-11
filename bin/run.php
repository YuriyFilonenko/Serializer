#!/usr/bin/env php
<?php

use App\{Person, JsonSerializer, YamlSerializer};

include_once __DIR__ . '/../vendor/autoload.php';

$person = new Person('John', 'Smith', 35);

$json = new JsonSerializer();
var_dump('JSON', $json->serialize($person));

$yaml = new YamlSerializer();
var_dump('YAML', $yaml->serialize($person));
