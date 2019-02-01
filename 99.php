Заполните массив 10-ю случайными числами
<?php
$arr;
for ($i = 0; $i < 10; $i++){
    $rand = mt_rand(1, 100);
    $arr[] = $rand;
}var_dump($arr);