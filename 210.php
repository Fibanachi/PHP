Сделайте функцию, которая принимает параметром число от 1 до 7,
а возвращает день недели на русском языке.

<?php
function func($day)
{
    $week = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
    return $week[$day];
}

echo func(5);