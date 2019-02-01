Дан массив с числами. Проверьте, что в этом массиве есть число 5.
Если есть - выведите 'да', а если нет - выведите 'нет'.

<?php

$arr = [1, 4, 6, 10, 11, 8];
$flag = false;

 foreach ($arr as $elem) {
        if ($elem == 5) {
            $flag = true;
            break;
        }
    }


if ($flag == true){
    echo 'Yes';
} else {
    echo 'No';
}

