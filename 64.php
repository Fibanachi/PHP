В переменной $day лежит какое-то
число из интервала от 1 до 31.
Определите в какую декаду месяца попадает это число
(в первую, вторую или третью)
<?php
$day = 22;
if ($day >= 1 && $day < 10){
    echo '1 quarter';
}
if ($day >= 10 && $day < 20){
    echo '2 quarter';
}
if ($day >= 20 && $day <= 31){
    echo '3 quarter';
}

if ($day <= 10){
    $decade = 1;
}
if ($day >= 11 && $day <=20){
    $dacade = 2;
}
if ($day >= 21 && $day <= 31) {
    $dacade = 3;
} echo $dacade;