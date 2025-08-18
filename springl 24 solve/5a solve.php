<?php
class Fruit {
    public $name;
    public $color;

    // Constructor to initialize values
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    // Method to introduce the fruit
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

// Example usage
$apple = new Fruit("Apple", "Red");
$apple->intro();  // Output: The fruit is Apple and the color is Red.
?>
