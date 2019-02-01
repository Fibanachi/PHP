Переделайте этот код так,
чтобы в нем использовались
операции ++, -- , +=, -=, *=, /=.
Количество строк кода при этом не должно измениться.

$var = 10;
$var = $var + 7;
$var = $var + 1;
$var = $var - 1;
$var = $var + 12;
$var = $var * 7;
$var = $var - 15;
echo $var;

<?php
echo $var = 10;
echo $var +=7;
echo $var++;
echo $var--;
echo "\n";
echo $var += 12;
echo "\n";
echo $var *= 7;
echo "\n";
echo $var -= 15;
