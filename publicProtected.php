<?php

class car{

    protected function color(){
        echo "red";
    } 

   
}
class car2 extends   car{
    public function color2(){
        $this-> color();
    }

}

$car2 = new car2();

 $car2->color2();

class one{
    protected $test = "This is a proparty";
}

class two extends one {
    public function access(){
        echo $this->one;
    }
}

$two = new two();
echo $two->test;

?>