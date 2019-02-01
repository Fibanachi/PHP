Дан массив с числами. Проверьте,
есть ли в нем два одинаковых числа подряд.
Если есть - выведите 'да', а если нет - выведите 'нет'

<?php
$arr = [1, 2, 3, 3, 4, 5, 5];
$flag = false;

foreach ($arr as $key=>$elem){
    if ($key > 0 and $elem == $arr[$key - 1]){
        $flag = true;
        break;
    }
}
if ($flag == true){
    echo 'Yes';
} else {
    echo 'No';
}