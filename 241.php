Сделайте функцию cut, которая первым
параметром будет принимать строку, а
вторым параметром - сколько первых
символов оставить в этой строке. Второй параметр должен быть
необязательным и по умолчанию принимать значение 10.

<?php

function cut($str, $lim = 10)
{
    return substr($str, 0, $lim);
}

echo cut('1234567', 2);