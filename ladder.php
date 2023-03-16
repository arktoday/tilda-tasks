<?php

// Подход 1
$inRow = 1;
$i = 1;

while($i <= 100) {
    for ($j = 1; $j <= $inRow; $j++) {
        echo ($i <= 100) ? $i++ : '-';
        echo "\t";
    }
    echo "\n";
    $inRow++;
}

