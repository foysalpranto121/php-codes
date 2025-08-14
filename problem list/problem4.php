<?php
$score = 85;
if ($score >= 90 && $score <= 100) {
    echo "Your grade is: A";
} elseif ($score >= 80 && $score <= 89) {
    echo "Your grade is: B";
} elseif ($score >= 70 && $score <= 79) {
    echo "Your grade is: C";
} elseif ($score >= 60 && $score <= 69) {
    echo "Your grade is: D";
} else {
    echo "Your grade is: F";
}
?>
