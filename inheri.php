<?php
    class employee{
        public $name, $age, $salary;

        function __construct($name, $age, $salary){
            $this->name = $name;
            $this->age = $age;
            $this->salary = $salary;
        }

        function info(){ 
            echo "<h2>Employee Profile</h2><br>";
            echo "Employee Name: ".$this->name . "<br>";
            echo "Employee Age: ".$this->age . "<br>";
            echo "Employee Salary: ".$this->salary;
        }

    }

    class manager extends employee{
        public $ta = 1000, $phone = 300, $totalSalary;

        function info(){ 
            $this->totalSalary = $this->salary + $this->ta + $this->phone;
            echo "<h2>Manager Profile</h2><br>";
            echo "Employee Name: ".$this->name . "<br>";
            echo "Employee Age: ".$this->age . "<br>";
            echo "Employee Salary: ". $this->totalSalary;
        }

    }

    $employee1 = new employee("Md Ahshanul Alam Khan", 25, 70000);
    $managerAccunce = new manager("Ahshanul Khan", 28, 120000);

    $employee1->info();
    $managerAccunce->info();


    class employee2{
        public $id, $name, $age, $gender, $salary;

        function __construct($id = 0, $name = "Empty", $gender = "Empty", $salary = 0){
            $this->id = $id;
            $this->name = $name;
            $this->gender = $gender;
            $this->salary = $salary;
        }

        function information(){
            echo "<h2>Employee Profile</h2><br>";
            echo "---------------------------------<br>";
            echo "Employee ID: ". $this->id . "<br>";
            echo "Empliyee Name: " . $this->name . "<br>";
            echo "Employee Gender: " . $this->gender ."<br>";
            echo "Employee Salary: " . $this->salary . "<br>";

    }

}
class manager2 extends employee2{
    public $ta = 1000;
    public $phoneBill = 300;
    public $totalSalary;

    function information(){
        $this->totalSalary = $this->salary + $this->ta + $this->phoneBill;

        echo "<h2>Manager Profile</h2><br>";
        echo "---------------------------------<br>";
        echo "Employee ID: ". $this->id . "<br>";
        echo "Empliyee Name: " . $this->name . "<br>";
        echo "Employee Gender: " . $this->gender ."<br>";
        echo "Employee Salary: " . $this->totalSalary . "<br>";
    }
}
$totalInfoEmployee = new employee2(01,"Md Ahshanul Alam Khan","male", 12000);
$totalInfoManager = new manager2(007,"Md Ahshanul Khan","male", 30000);

$totalInfoEmployee->information();
$totalInfoManager->information();
?>