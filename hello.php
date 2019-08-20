<?php
echo "Hello world";


$a = 0;
$b = 0;

for( $i=0; $i<5; $i++){
    $a += 5;
    $b += 10;
}

if($a > 20){
    echo "\na is greater than 20.";
} else {
    echo "\na is less than 20.";
}

    echo "\nAt the end of the loop, a = $a, and b = $b.";

function familyHistory($fname, $year) {
   echo "\n$fname Panda. Born in $year";
}
familyHistory("Blake", "2010");
