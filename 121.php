Дана строка '31.12.2013'. Замените все точки на дефисы
<?php
$str = '31.12.2013';
echo str_replace('.', '-', $str);