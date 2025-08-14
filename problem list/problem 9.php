<?php
$text = "Hello World";
$count = 0;
$text = strtolower($text);

for ($i = 0; $i < strlen($text); $i++) {
    if (strpos("aeiou", $text[$i]) !== false) {
        $count++;
    }
}

echo "The string \"$text\" has $count vowels.";
?>
