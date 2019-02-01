Переделайте этот код так,
чтобы в нем использовались операции ++ и --.
Количество строк кода при этом не должно измениться.

$var = 10;
$var = $var + 1;
$var = $var + 1;
$var = $var - 1;
echo $var;

<?php
echo $var = 10;
echo ++$var;
echo ++$var;
echo --$var;
echo $var;