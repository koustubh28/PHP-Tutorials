<?php 

class employee {
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info() {
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee Age: " . $this->age . "<br>";
        echo "Employee Salary: " . $this->salary . "<br>";
    }
}

class manager extends employee {
    public $ta = 1000;
    public $phone = 300;
    public $totalSalary;

    function info() {
        $this->totalSalary = $this->ta + $this->phone;

        echo "<h3>Manager Profile</h3>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee Age: " . $this->age . "<br>";
        echo "Employee Salary: " . $this->totalSalary . "<br>";

    }
}

$emp1 = new employee("Koustubh", 28, 25000);
$emp1->info();

$emp2 = new manager("Ram Kishan", 25, 10000);
$emp2->info();

?>