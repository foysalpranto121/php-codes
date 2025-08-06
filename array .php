<?php


echo" welcome to associate array <br> ";
// $arrayName = array('this','that','those');
// echo $arrayName[0];
// echo "<br>";
// echo $arrayName[1];
// echo "<br>";
// echo $arrayName[2];
$favColor=array(
    'pranto'=> 'red',
    'rahim'=>'blue',
    'mahin'=>'green',
    8 =>'emni'
);

// echo $favColor['pranto'];
// echo "<br>";
// echo $favColor['mahin'];
// echo "<br>";
// echo $favColor[8];
foreach ($favColor as $key => $value) {
    // echo "$value <br>";
    // echo "$key <br>";
    echo "fav color for $key is $value <br>";


}


?>