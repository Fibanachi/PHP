Найдите все года от 1 до 2018, сумма цифр
которых равна 13. Для этого используйте
вспомогательную функцию getDigitsSum из предыдущей задачи

<?php
$year = date('Y');
$arr = [];

function getDigitSum($num)
{
    return array_sum(str_split($num, 1));
}

for ($i = 1; $i < $year; $i++){
    if(getDigitSum($i) == 13){
        $arr[] = $i;
    }
}
var_dump($arr);