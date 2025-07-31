
<!DOCTYPE html>
<html>
<body>

<?php
// strlen  uisng string length
echo strlen("Hello DIU "). ("<br>");
echo strlen(" Foysal Ahemd Pranto").("<br>");
// string count 
//echo str_word_count("hello guys");
// searching any word in string  show position ( o = not find , if show 1 = found )
echo strpos(" Foysal Ahemd Pranto","Foysal").("<br>");
// upper case lower case in string
echo strtoupper(" Foysal Ahemd Pranto").("<br>");
echo strtolower(" Foysal Ahemd Pranto").("<br>");
// replacing string 
$replace="Foysal pranto";
echo str_replace(" pranto" ," Ahmed",$replace ).("<br>");

// reverse string 

echo strrev($replace).("<br>");
// remove extra or white space 
echo trim($replace).("<br>");

// string concatation
$m="Foysal";
$n="Ahmed";

echo ($m . " " .$n).("<br>");
// kata kati with string i mean slice 
echo substr($m ,1,5);


?> 
 
</body>
</html>
