Дано число $num=1000.
Делите его на 2 столько раз,
пока результат деления не станет меньше 50.
Какое число получится? Посчитайте количество итераций,
необходимых для этого (итерация - это проход цикла).
Решите задачу сначала через цикл while,
а потом через цикл for.
<?php
//$num = 1000;
//$i = 0;
//
//while ($num > 50){
//        $num /= 2;
//        $i++;
//    }
//    echo $i.' ';
//    echo $num;

    for ($num = 1000, $i = 0; $num > 50; $num /= 2, $i++);

        echo $i;
        echo $num;
