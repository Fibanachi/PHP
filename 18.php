Переделайте этот код так, чтобы в нем
использовались операции +=, -=, *=, /=.
Количество строк кода при этом не должно измениться.

$var = 47;
$var = $var + 7;
$var = $var - 18;
$var = $var * 10;
$var = $var / 20;
echo $var;

<?php
$var = 47;
echo $var += 7;
echo $var -= 18;
echo $var *= 10;
echo $var /= 20;
echo $var;