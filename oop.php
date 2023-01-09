<?php
//object oriented programming

//class - public, private, protected
//property
//method
//object

class TestClass //class
{
    public $prop1; //property

    public function testMethod($one, $two) //method
    {
        echo "this is a test method " . $one + $two;
    }

    public function sum($one, $two)
    {
        echo $one + $two;
    }

    public function substraction($one, $two)
    {
        echo $one - $two;
    }
}

$obj = new TestClass(); //object

//$obj->substraction(1, 2);


class User
{
    public $username;

    public function userName($name)
    {
        $this->username = $name;
    }

    public function number($a, $b)
    {
        $this->sum($a, $b);
    }

    public function sum($a, $b)
    {
        echo $a + $b;
    }
}

$obj = new User();

$obj->userName("john");

//echo $obj->username;

//$obj->number(1, 2);


//extend class

class ParentClass
{
    public $popertyOne = "parent property";

    protected function name()
    {
        echo "john";
    }

    public function show()
    {
        $this->name();
    }
}

// $parentObj = new ParentClass();

// $parentObj->name();

class ChildClass extends ParentClass
{
    public function showName()
    {
        $this->name();
    }
}

$childObj = new ChildClass();

//$childObj->showName();


//trait
trait newTrait
{
    public $traitName;

    public function name()
    {
        echo "john in trait";
    }
}


class forTrait
{
    use newTrait;

    public function showUserName()
    {
        echo "doe";
    }
}

$forTraitObj = new forTrait();

//$forTraitObj->name();

class forTrait2
{
    use newTrait;

    public function showUserName()
    {
        echo "doe";
    }
}

$forTraitObj2 = new forTrait2();

//$forTraitObj2->name();


class returnClass
{

    public function showOurName()
    {
        return "john";
    }

    public function showReturnedName()
    {
        echo $this->showOurName();
    }
}


$returnClassobj = new returnClass();

//$returnClassobj->showReturnedName();


//constructor

class consClass
{
    public function __construct($var)
    {
        echo $var;
    }
}

$consClassObj =  new consClass("this is for constructor");
