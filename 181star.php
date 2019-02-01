Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8.
С помощью цикла и функций array_shift и array_pop
выведите на
экран его элементы в следующем порядке: 18273645

<?php
$arr = range(1, 8);

$str = '';
    while (count($arr)>0){
        $str .=array_shift($arr);
        $str .=array_pop($arr);
    }
    print_r ($str);