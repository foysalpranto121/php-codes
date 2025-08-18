<?php
function calculateCircleArea($radius) {
    return pi() * $radius * $radius;
}

$radius = 7;
$area = calculateCircleArea($radius);

echo "Input radius = $radius<br>";
echo "Output: Area of Circle = " . round($area, 2);
?>
