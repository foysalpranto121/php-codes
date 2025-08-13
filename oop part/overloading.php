<?php
class Student {
    // This magic method is called when a non-existing method is used
    public function __call($name, $arguments) {
        echo "You tried to call '$name' with these values: " . implode(", ", $arguments) . "<br>";
    }
}

$stu = new Student();

// These methods don't exist, so __call() will handle them
$stu->showInfo("Foysal", 23);
$stu->getMarks(80, 90, 85);
?>
