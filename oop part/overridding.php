<?php
class ParentClass {
    public function sayHello() {
        echo "Hello from Parent<br>";
    }
}

class ChildClass extends ParentClass {
    //Overriding means child class redefines a method from the parent class.
    // Overriding parent method
    public function sayHello() {
        echo "Hello from Child<br>";
    }
}

$obj = new ChildClass();
$obj->sayHello(); 
?>

