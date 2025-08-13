<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}
// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry?<br> ";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();

?>
// another example 
<?php
// Parent class
class Animal {
    public function eat() {
        echo "I can eat food.<br>";
    }
}

// Child class inheriting from Animal
class Dog extends Animal {
    public function bark() {
        echo "I can bark! Woof Woof!<br>";
    }
}

// Create object of Dog
$myDog = new Dog();

// Child class can use its own method
$myDog->bark();

// Child class can also use parent class method
$myDog->eat();
?>
