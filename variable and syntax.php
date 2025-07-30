<?php 

$text="foysal Ahmed Pranto ";




echo "hello $text <br>";

$x=10;
$y=20;
$result= $x+$y;
echo "$result <br> \n";

// data types
$x = 5;
var_dump($x  );

$y="pranto";
var_dump ($y);
// asigning multiple values
$x = $y = $z = "Fruit ";

echo $x;
echo $y;
echo $z;
// global and local scope 
$x = 5; // global scope
/*
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";*/
 /*function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";*/
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15



?>


?>
// print statement 
<?php
$txt1 = "Learn PHP";
$txt2 = "pranto.com";

print '<h2>' . $txt1 . '</h2>';
print '<p>Study PHP at ' . $txt2 . '</p>';
?>
