Сделайте функцию isNumberInRange,
которая параметром принимает число
и проверяет, что оно больше нуля и
меньше 10. Если это так - пусть
функция возвращает true, если не так - false

<?php
function isNumberInRange($num)
{
    return $num > 0 and $num < 10;
}