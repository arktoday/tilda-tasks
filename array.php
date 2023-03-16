<?php

$randArr = [];
$numRows = 5;
$numCols = 7;

for ($i = 0; $i < $numRows; $i++) {
    for ($j = 0; $j < $numCols; $j++) {
        $randArr[$i][$j] = rand(1, 1000);
    }
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
