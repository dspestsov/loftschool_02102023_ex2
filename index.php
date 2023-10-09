<?php

require('src/functions.php');

echo "Задание 1.<br>";
$arrOfStrings = [
    'string1',
    'string2',
    'very long string 3',
    sha1('longest string'),
    'not small string'
];
task1($arrOfStrings);
echo "Вызов с аргументом 'true'<br>";
echo task1($arrOfStrings, true);

echo '<hr size="3px">';

echo "Задание 2.<br>";
echo "Вызов task2 с аргументами: 1, 2, 3, 55, 10, 405. Результат: " . task2(1, 2, 3, 55, 10, 405) . "<br>";
echo "Вызов task2 с аргументами: 'на этот раз строка', 2, 3, 55. Результат: " . task2('на этот раз строка', 2, 3, 55) . "<br>";
echo "Вызов task2 с аргументами: '+', 'a', 3, 55. Результат: " . task2('+', 'a', 3, 55) . "<br>";
echo "Вызов task2 с аргументами: '+', 1, 2, 3, 4.3. Результат: " . task2('+', 1, 2, 3, 4.3) . "<br>";
echo "Вызов task2 с аргументами: '-', 1, 2, 3, 4.3. Результат: " . task2('-', 1, 2, 3, 4.3) . "<br>";
echo "Вызов task2 с аргументами: '*', 1, 2, 3, 4.3. Результат: " . task2('*', 1, 2, 3, 4.3) . "<br>";
echo "Вызов task2 с аргументами: '/', 1000, 2, 3, 4.3. Результат: " . task2('/', 1000, 2, 3, 4.3) . "<br>";
echo "Вызов task2 с аргументами: '%', 7, 2, 3, 4.3. Результат: " . task2('%', 7, 2, 3, 4.3) . "<br>";
echo "Вызов task2 с аргументами: '**', 2, 2, 3, 4.3. Результат: " . task2('**', 2, 2, 3, 4.3) . "<br>";

echo '<hr size="3px">';

echo "Задание 3.<br>";
task3(2, 'dfd');
task3(17, 9);

echo '<hr size="3px">';

echo "Задание 4.<br>";
task4();

echo '<hr size="3px">';

echo "Задание 5.<br>";
task5();

echo '<hr size="3px">';

echo "Задание 6.<br>";
$fileName = 'test.txt';
$file = fopen($fileName, 'w');
fputs($file, 'Hello again!');
fclose($file);
task6($fileName);