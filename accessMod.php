<?php

//Public
class base{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function show(){
        echo "Yhour Name is: " . $this->name . "<br>";
    }
}
$test = new base("Md Ahshanul Alam Khan");
$test->show();

//Protected
class base2{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    protected function show(){
        echo "Your Name is: " . $this->name . "<br>";
    } 

}

class derived extends base2{
    public function get(){
        echo "Your Name is: " . $this->name . "<br>";
    } 
}

$done = new derived("I'm Ahshanul Alhamdulillah");
$done->get();
?>