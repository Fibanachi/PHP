Создайте массив вида [[1, 2, 3], [4, 5, 6], [7, 8, 9]]
не используя цикл

<?php
$arr = range (1,9);
$result = array_chunk($arr,3);
print_r($result);