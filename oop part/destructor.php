<?php

echo "start conc func <br>";

class Employee {
    // class properties
    public $name;
    public $salary;
    // constructor

    function __construct($name1, $salary1) {
        $this->name = $name1;
        $this->salary = $salary1;
    }
    // destruct -> destruct show == how many object u created  



    function __destruct()
    {
        echo"i am a destructor $this->name<br>";
    }

   
}

// create objects
$emp1 = new Employee("pranto", 122222);
$emp2 = new Employee("mahin", 12222552);

// output salary
echo "Salary of emp1 is {$emp1->salary}<br>";
echo "Salary of emp2 is {$emp2->salary}<br>";




?>
