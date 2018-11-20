Serializer
==========

This is simple library for objects serialization to needed format.

Usage
-----

```php
$person = new Person('John', 'Smith', 35);

$json = new JsonSerializer();
$json->serialize($person));

$yaml = new YamlSerializer();
$yaml->serialize($person));
```
