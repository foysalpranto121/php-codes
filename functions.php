<?php

function processMarks($marksArr){

    $sum=0;
    foreach ($marksArr as  $value) {
        
$sum=$sum+$value;





    }
    return $sum;
}

$pranto=[22,333,4444,55];
$sumMarks=processMarks($pranto);
 echo $sumMarks;

?>