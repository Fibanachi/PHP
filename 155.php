Создайте строку '1-2-3-4-5-6-7-8-9' не используя цикл.
<?php
$arr = range(1, 9);
$arrFinal = implode ('-', $arr);
print_r($arrFinal);