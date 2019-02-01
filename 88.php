Теперь результаты необходимо
записать в массив. Сделать
это можно двумя способами:
объявить через [ ] либо просто
воспользоваться присваиванием
$arr[ ] = 'html'; $arr[ ] = 'php'; и так далее.
<?php
//$sqrt = sqrt(1000);
//$arr = [$sqrt, floor($sqrt), ceil($sqrt)];
//var_dump($arr);

$sqrt = sqrt (1000);
$arr[] = $sqrt;
$arr[] = floor($sqrt);
$arr[] = ceil($sqrt);
echo var_dump($arr);