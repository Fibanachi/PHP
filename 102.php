Дано число, например 30.
У этого числа есть делители - числа,
на которое оно делится без остатка.
Делители числа 30 - это 1, 2, 3, 5, 6, 10, 15, 30.
Задача: сделайте массив делителей нашего числа.
Число может быть любым, не обязательно, 30.
<?php
$a = 30;
$arr = [];
for ($i = 1; $i <= $a; $i++){
    if ($a % $i == 0){
        $arr [] = $i;
    }

}var_dump($arr);