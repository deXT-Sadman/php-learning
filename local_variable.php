<?php
$x = 10;
function myTEST(){
    $x = 5;
    echo "Variable x inside function is: $x";
}

myTEST();
echo "\n";
echo "Variable x outside function is: $x";
?>