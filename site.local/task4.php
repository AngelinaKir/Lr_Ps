<?php
// Задание 2.5: Работа с константой NUM_E
define("NUM_E", 2.71828);
echo "Число e равно " . NUM_E . "<br>";

$num_e1 = NUM_E;
echo "Тип переменной \$num_e1: " . gettype($num_e1) . "<br>";

// Меняем тип на строковый
$num_e1 = (string)$num_e1;
echo "Строковый тип: " . gettype($num_e1) . ", значение: $num_e1 <br>";

// Меняем тип на целый
$num_e1 = (int)$num_e1;
echo "Целый тип: " . gettype($num_e1) . ", значение: $num_e1 <br>";

// Меняем тип на булевский
$num_e1 = (bool)$num_e1;
echo "Булевский тип: " . gettype($num_e1) . ", значение: " . ($num_e1 ? 'true' : 'false') . "<br>";
?>