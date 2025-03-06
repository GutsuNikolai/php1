<?php

// Шаг 3
echo "Привет, мир!<br>";

// Шаг 4
echo "Hello, World with echo!<br>";
print "Hello, World with print!<br>";

// Шаг 5
$days = 288;
$message = "Все возвращаются на работу!";

    // Конкатенация
echo "Осталось " . $days . " дней. " . $message . "<br>";

    // Интерполяция в строках
echo "Осталось $days дней. $message <br>";

    // Использование фигурных скобок
echo "Осталось {$days} дней. {$message} <br>";
