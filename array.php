<?php

$randArr = [];
$numRows = 5;
$numCols = 7;

$rangeArr = range(1, 1000);
shuffle($rangeArr);
$rangeArr = array_slice($rangeArr, 0, $numRows * $numCols);

for ($i = 0; $i < $numRows; $i++) {
    $randArr[$i] = array_slice($rangeArr, $i * $numCols, $numCols);
}

$colSumArr = [];
for ($i = 0; $i < count($randArr); $i++) {
    for ($j = 0; $j < count($randArr[$i]); $j++) {
        echo $randArr[$i][$j] . "\t";
    }
    echo "| " . array_sum($randArr[$i]);

//    Данное выражение было использовано для рассчета суммы столбцов путем транспонирования
//    Минус заключается в том, что цикл не доходит до подсчета последних двух столбцов
//    echo "| " . array_sum(array_map(null, ...$randArr)[$i]);

    echo "\n";
}

//Транспонирование
$transArr = array_map(null, ...$randArr);

for ($j = 0; $j < count($transArr); $j++) {
    echo array_sum($transArr[$j]) . "\t";
}
