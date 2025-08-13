<?php

echo "start conc func <br>";

class Employee {
    // class properties
    public $name;
    public $salary;
    // constructor -->> it allows you to initialize objects .it is the code which is exicuted whenver a new object is instantiated .
// constructor wuthout argument 
// function __construct()
// {
//    echo"this is my constructor"; 
// }

    // constructor with arguments
    function __construct($name1, $salary1) {
        $this->name = $name1;
        $this->salary = $salary1;
    }

    // method to get employee details
    function getDetails() {
        return "Name: {$this->name}, Salary: {$this->salary}";
    }
}

// create objects
$emp1 = new Employee("pranto", 122222);
$emp2 = new Employee("mahin", 12222552);

// output salary
echo "Salary of emp1 is {$emp1->salary}<br>";
// out put name 

echo "Name of emp2 is {$emp2->name }<br>";
// output details
echo "Emp1 details is " . $emp1->getDetails();

?>
