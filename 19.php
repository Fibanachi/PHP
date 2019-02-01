Переделайте этот код так, чтобы в нем использовалась
операция .=. Количество строк кода при этом не должно измениться.
$text = 'Я';
$text = $text.' хочу';
$text = $text.' знать';
$text = $text.' PHP!';
echo $text;

<?php
$text = "I";
$text .= " want";
$text .= " know";
$text .= " PHP";
echo $text;