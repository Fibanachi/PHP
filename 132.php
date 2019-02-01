Дана строка 'html css php'.
С помощью функции explode
запишите каждое слово этой
строки в отдельный элемент массива
<?php
$str = explode(' ', 'html css php');
var_dump($str);