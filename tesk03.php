<?php

$firstNumber = 0;
$secondNumber = 1;

echo "First 10 Fibonacci numbers:\n";

for ($i = 1; $i <= 10; $i++) {

    $nextNumber = $firstNumber + $secondNumber;

    if ($nextNumber > 100) {
        break;
    }

    echo $nextNumber . "\n";

    $firstNumber = $secondNumber;
    $secondNumber = $nextNumber;
}