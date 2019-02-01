В переменной $min лежит число от 0 до 59.
Определите в какую четверть часа попадает
это число (в первую, вторую, третью или четвертую).
<?php
$min = 35;
if ($min >=0 && $min<=14){
    echo '1 quarter';
};
if ($min>=15 && $min<=29){
    echo '2 quarter';
}
if ($min>=30 && $min<=44){
    echo '3 quarter';
}
if ($min>=45 && $min<=59){
    echo '4 quarter';
}
