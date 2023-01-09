<?php
class person{
    public $name;
    function show(){
        echo "The Name is: ". $this->name;
    }
}

$person1 = new person();
$person1->name = "Md Ahshanul Alam Khan";
$person1->show();

echo "<br><br>------------------------";
echo "<br><br>";
//Coading the same code woth OOP
class person2{
    public $name = "null";

    function __construct($name){
        $this->name = $name;
    }

    function show(){
        echo "My Name is: ".$this->name;
    }
}
$per = new person2("Md Ahshanul Alam Khan");
// $per->person2();

echo "<br><br>";

//another time
class personAgain{
    public $name = "No name";
     public $age = 0;

    function showAgain(){
        echo $this->name . " - " . $this->age;
    }
}

 $p1 = new personAgain();

 $p1->name = "Md. Ahshanul Alam Khan";
 $p1->age = 25;

 $p1->showAgain();
 echo "<br><br>";

 //another same code using constructor
 class morePerson{
    public $name, $age;

    function __construct($name = "No Name", $age = 0){
        $this->name = $name;
        $this->age = $age;
    }

    function moreShow(){
        echo $this->name . " - " . $this->age;
    }
 }
 
 $seePerson = new morePerson("Md. Ahshanul Alam Khan", 25);

 $seePerson->moreShow();

 echo "<br><br>";

 //same code last time
 class lastMan{
    public $name, $age;

    function __construct($name = "No Name", $age = 0){
        $this->name = $name;
        $this->age = $age;
    }

    function lastShow(){
        echo $this->name . " - " . $this->age;
    }
 }

 $lastSee = new lastMan("Khan", 25);
 $lastSee->lastShow();

 echo "<br><br>";

 //exam 
 class examPerson{
    public $name, $age;

    function __construct($name = "Empty", $age = 0){
        $this->name = $name;
        $this->age = $age;
    }

    function showResult(){
        echo "Your Nameis " . $this->name . " and " . "Your age is " . $this->age . "<br>";
    }
 }

 $ok = new examPerson("Md Ahshanul Alam Khan", 25);
 $ok2 = new examPerson();
 $ok3 = new examPerson("Md Ahshanul Khan", 26);
//  $ok->name = "Md Ahshanul Alam Khan";
//  $ok->age = 25;

 $ok->showResult();
 $ok2->showResult();
 $ok3->showResult();
?>