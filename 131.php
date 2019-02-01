Проверьте, что строка начинается
на 'http://'. Если это так -
выведите 'да', если не так - 'нет'
<?php
$str = 'http://asdfas';
if (strpos($str,'http://') === 0){
    echo "Yes";
}else{
    echo 'NO';
}