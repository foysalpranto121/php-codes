<?php
$scores = [88, 92, 75, 68, 95];
$sum = 0;

for ($i = 0; $i < sizeof($scores); $i++) {
    $sum += $scores[$i];
}

$average = $sum / sizeof($scores);
echo "The average score is $average.";
?>
