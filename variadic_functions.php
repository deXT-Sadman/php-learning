<?php
function calculateTotal(int ...$scores): int
{
    return array_sum($scores);
}

echo calculateTotal(10, 20, 30, 40); // Output: 100
echo "\n"; 
echo calculateTotal(5, 15, 25); // Output: 45
?>