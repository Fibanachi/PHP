Дан массив с элементами 10, 20, 15, 17, 24, 35.
Найдите сумму элементов этого массива.
Запишите ее в переменную $result.
<?php
$arr = [10, 20, 15, 17, 24, 35];
$result = 0;
foreach ($arr as $elem){
    $result += $elem;
} echo $result;