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
echo "=====================<br>";
echo task1($arrOfStrings, true);

