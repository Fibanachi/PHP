Дан трехмерный массив с числами, например
[[[1, 2], [3, 4]], [[5, 6], [7, 8]]].
Найдите сумму элементов этого массива.
Массив, конечно же, может быть произвольным

<?php
$arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
$sum = 0;
foreach ($arr as $elem){
    foreach ($elem as $num){
        foreach ($num as $value){
            $sum += $value;
        }
    }
}
echo ($sum);