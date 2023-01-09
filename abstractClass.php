<?php
abstract class parentClass{
    public $name;

    abstract protected function calc($a, $b);
}

class childClass extends parentClass{
    public function calc($a, $b){
        echo $a + $b;
    }
}
$test = new childClass();

$test->calc(5, 10);

echo "<br><br>";

abstract class mainClass{
    abstract protected function calculation($a, $b);
}

class derived extends mainClass{
    public function calculation($a, $b){
        echo $a * $b;
    }
}
$test2 = new derived();
$test2->calculation(20, 30);
?>