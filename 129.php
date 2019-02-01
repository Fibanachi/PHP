Дана строка 'aaa aaa aaa aaa aaa'.
Определите позицию второго пробела
<?php
$str = 'aaa aaa aaa aaa aaa';
$first = strpos($str, ' ');
echo strpos ($str, ' ', $first + 1);