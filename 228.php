Дан двухмерный массив с числами, например
[[1, 2, 3], [4, 5], [6]]. Найдите сумму
элементов этого массива.
Массив, конечно же, может быть произвольным

<?php
$arr = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($arr as $elem){
    foreach ($elem as $item){
        $sum += $item;
    }
}
print_r ($sum);
