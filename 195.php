Дан массив с числами. Найдите
среднее арифметическое его элементов

<?php
$arr = range(1,5);
$result = array_sum($arr);
$count = count($arr);
print_r ($result/$count);
