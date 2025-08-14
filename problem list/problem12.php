<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];
$odds = [];

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 != 0) {
        $odds[] = $numbers[$i];
    }
}

print_r($odds);
?>
