Дана строка $str. Замените в ней все
буквы 'a' на цифру 1, буквы 'b' -
на 2, а буквы 'c' - на 3.
<?php
$str = 'aabbabcbcacklj';
echo str_replace(['a', 'b', 'c'], ['1', '2', '3'], $str);