<?php
// Задание 2.6: Примеры предопределенных констант и переменных
echo "<h3>Предопределенные константы:</h3>";
echo "PHP_VERSION: " . PHP_VERSION . "<br>";
echo "PHP_OS: " . PHP_OS . "<br>";
echo "__FILE__: " . __FILE__ . "<br>";
echo "__LINE__: " . __LINE__ . "<br>";

echo "<h3>Предопределенные переменные (массивы):</h3>";
echo "Серверное ПО: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Имя хоста: " . $_SERVER['HTTP_HOST'] . "<br>";
echo "Ваш браузер: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
?>