<?php
interface Interface1
{
    public function method1();
}
interface Interface2
{
    public function method2();
}
class ParentClass
{
    protected $property1;
    public function __construct($value)
    {
        $this->property1 = $value;
    }
    public function getProperty1()
    {
        return $this->property1;
    }
}

class ChildClass extends ParentClass implements Interface1, Interface2
{
    private $property2;
    public function __construct($value1, $value2)
    {
        parent::__construct($value1);
        $this->property2 = $value2;
    }
    public function getProperty2()
    {
        return $this->property2;
    }
    public function method1()
    {
        echo "This is method1 from Interface1\n";
    }
    public function method2()
    {
        echo "This is method2 from Interface2\n";
    }
}
$childObject = new ChildClass("Value1", "Value2");
$childObject->method1();
$childObject->method2();
?>