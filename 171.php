Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'.
Попробуйте на нем различные типы сортировок.

<?php
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
natsort($arr);
print_r($arr);