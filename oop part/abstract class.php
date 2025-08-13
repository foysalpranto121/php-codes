<?php
// Abstract class
abstract class Animal {
    // Abstract method (no body here)
    abstract public function makeSound();

    // Normal method (with body)
    public function eat() {
        echo "I can eat food.<br>";
    }
}

// Child class must implement the abstract method
class Dog extends Animal {
    public function makeSound() {
        echo "Woof! Woof!<br>";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow! Meow!<br>";
    }
}

// Create objects
$dog = new Dog();
$dog->makeSound(); // Woof! Woof!
$dog->eat();       // I can eat food.

$cat = new Cat();
$cat->makeSound(); // Meow! Meow!
$cat->eat();       // I can eat food.
?>
