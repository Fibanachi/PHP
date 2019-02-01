В переменной $month лежит какое-то число
из интервала от 1 до 12. Определите в какую
пору года попадает этот месяц (зима, лето, весна, осень)
<?php
$month = 12;
if ($month == 12 || $month >=1 && $month <= 2){
    $result = 'Зима';
}
if ($month >= 3 && $month <= 5){
    $result = 'Весна';
}
if ($month >= 6 && $month <= 8){
    $result = 'Лето';
}
if ($month >= 9 && $month <= 11){
    $result = 'Осень';
} echo $result;