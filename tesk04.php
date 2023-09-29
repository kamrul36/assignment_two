<?php

declare(strict_types=1);


function printFibonacciSeries2(int $count): void {
    if ($count <= 0) {
        echo "Invalid input. Please provide a positive count.";
        return;
    }
    
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    if ($count >= 1) {
        echo $fibonacci[0] . " ";
    }
    if ($count >= 2) {
        echo $fibonacci[1] . " ";
    }

    for ($i = 2; $i < $count; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        echo $fibonacci[$i] . "\n";
    }
}

echo "Fibonacci numbers are: ";

printFibonacciSeries2(15);