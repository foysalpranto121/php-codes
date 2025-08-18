<?php
// Base class
class Shape {
    public function calculateArea() {
        return 0;
    }
}

// Derived class Circle
class Circle extends Shape {
    private $radius;

    // Constructor
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Setter for radius
    public function setRadius($radius) {
        $this->radius = $radius;
    }

    // Override calculateArea
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Instantiate Circle with radius 5
$circle = new Circle(5);

// Update radius (example: 7)
$circle->setRadius(7);

// Print calculated area
echo "Area of Circle: " . $circle->calculateArea();
?>
