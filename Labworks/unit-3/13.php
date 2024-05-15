<?php
class Person
{
    private $data = [];
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }
    public function __call($name, $arguments)
    {
        echo "Calling object method '$name' with " . implode(', ', $arguments) . "\n";
    }
}
$person = new Person();
$person->name = 'Ujwal Parajuli';
$person->age = 19;
echo $person->name . ' is ' . $person->age . ' years old.' . "<br>";
echo $person->undefined_property . "<br>";
$person->sayHello('argument1l', 'argument2');
?>