<?php
$capitals = [
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "Bangladesh" => "Dhaka"
];

function checkCapital($country, $userGuess, $capitals) {
    if (isset($capitals[$country]) && $capitals[$country] == $userGuess) {
        echo "Correct! The capital of $country is $userGuess.";
    } else {
        echo "Incorrect. Try again!";
    }
}

$country = "Japan";
$userGuess = "Tokyo";

checkCapital($country, $userGuess, $capitals);
?>
