Сделайте функцию getDigitsSum (digit - это цифра),
которая параметром
принимает целое число и возвращает сумму его цифр

<?php

function getDigitSum($num)
{
    return array_sum(str_split($num, 1));
}
echo getDigitSum(1234);