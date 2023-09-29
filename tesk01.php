<?php

declare(strict_types=1);

function printEvenNumbersUsingForLoop(int $start, int $end, int $step): void
{
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . "\n";
        }
    }
}


echo "Using for loop: ";
printEvenNumbersUsingForLoop(2, 20, 2);



function printEvenNumbersUsingWhileLoop(int $start, int $end, int $step): void {
    while ($start <= $end) {
        if ($start % 2 === 0) {
            echo $start . "\n";
        }
        $start += $step;
    }
}

echo "Using while loop: ";
printEvenNumbersUsingWhileLoop(2, 20, 2);



function printEvenNumbersUsingDoWhile(int $start, int $end, int $step): void {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . "\n";
        }
        $i += $step;
    } while ($i <= $end);
    echo "\n";
}

echo "Using do while loop: ";
printEvenNumbersUsingDoWhile(2, 20, 2);

?>