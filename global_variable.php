<?php
$x = 5;

function myTest(){
    //using x inside this function will not work
    echo "Variable x inside function is: $x";

}

myTest();

echo "\n";

echo "Variable x outside the function is: $x";
?>