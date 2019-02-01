С помощью цикла найдите сумму чисел от 1 до 100
<?php
$i = 1;
$result = 0;
while ($i <= 100){
    $result +=$i;
    $i++;
} echo $result;

$sum = 0;
for ($j = 1; $j <= 100; $j++){
    $sum += $j;
} echo $sum;