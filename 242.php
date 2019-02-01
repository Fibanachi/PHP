Дан массив с числами. Выведите последовательно
его элементы используя рекурсию и не используя цикл

<?php
function printArr($arr)
{
    echo array_shift($arr) . ' ';
    if (!empty($arr)){
        echo printArr($arr);
    }
}

echo printArr([1,2,3,4,5]);