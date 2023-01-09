<?php

class calculation{
    public $a, $b, $c;

    function sum(){
        $this->c = $this->a + $this->b;

        return $this->c;
    }

    function sub(){
        $this->c = $this->a - $this->b;

        return $this->c; 
    }
}

$calculation = new calculation();

$calculation->a = 10;
$calculation->b = 20;

echo $calculation->sum();
echo "<hr>";
echo $calculation->sub();

// Another

class calculation2{
    public $a, $b, $result;

    function sum(){
        $this->result = $this->a + $this->b;

        return $this->result;
    }

    function sub(){
        $this->result = $this->a - $this->b;

        return $this->result;
    }
}

$output = new calculation2();

$output->a = 50;
$output->b = 60;

echo $output->sum(). "\n";
echo $output->sub();

echo "<br> <br><br>";

//another 
class Furit{

    //properties
    public $name;
    public $color;

    //Methods
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
}

$apple = new Furit();
$apple->set_name('Apple');
$apple->set_color('Red');

echo "Neme: ". $apple->get_name();
echo "<br><br>";
echo "Color: " . $apple->get_color();

//another 

?>