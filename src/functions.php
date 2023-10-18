<?php

function task1 ($arrOfStrings, $isReturnValue = false)
{
    $result = '';
    foreach ($arrOfStrings as $string) {
        $result .= '<p>' . $string . '</p>';
    }

    if ($isReturnValue) {
        return $result;
    }
    echo $result;
}

function task2 (): string
{
    $args = func_get_args();
    $allowOperators = ['+', '-', '*', '/', '%', '**'];

    $operator = array_shift($args);

    if (!is_string($operator)) {
        return 'Ошибка: первый аргумент должен быть строкой, означающей арифметическую операцию.';
    }

    if (!in_array($operator, $allowOperators)) {
        return 'Ошибка: неизвестная арифметическая операция. Допустимые значения: +, -, *, /, %, **.';
    }

    $args = array_filter($args, 'is_numeric');

    switch ($operator) {
        case '+':
            $result = array_sum($args);
            break;
        case '-':
            $result = array_shift($args) - array_sum($args);
            break;
        case '*':
            $result = array_product($args);
            break;
        case '/':
            $init = array_shift($args);
            $result = array_reduce($args, function($result, $num) {
                return $result / $num;
            }, $init);
            break;
        case '%':
            $init = array_shift($args);
            $result = array_reduce($args, function($result, $num) {
                return $result % $num;
            }, $init);
            break;
        case '**':
            $init = array_shift($args);
            $result = array_reduce($args, function($result, $num) {
                return $result ** $num;
            }, $init);
            break;
    }

    return '' . $result;
}

function task3 ($countRows, $countColumns) {
    if (!is_int($countRows) || !is_int($countColumns)) {
        echo "Аргументы функции должны быть целыми числами.";

        return false;
    }

    $table = '<table>';
    for ($numRow = 1; $numRow <= $countRows; $numRow++) {
        $table .= '<tr>';
        for ($numColumn = 1; $numColumn <= $countColumns; $numColumn++) {
            $table .= '<td>' . "{$numColumn} x {$numRow} = " . ($numColumn * $numRow) . '</td>';
        }
        $table .= '</tr>';
    }
    $table .= '</table>';

    echo $table;
}

function task4 () {
    echo date('d.m.Y H:s') . "<br>";
    echo strtotime('24.02.2016 00:00:00') . "<br>";
}

function task5 () {
    $str = "Карл у Клары украл Кораллы";
    echo "{$str}<br>";
    $str = str_replace('К', '', $str);
    echo "{$str}<br>";

    $str = "Две бутылки лимонада";
    echo "{$str}<br>";
    $str = str_replace('Две', 'Три', $str);
    echo "{$str}<br>";
}

function task6 ($fileName) {
    echo file_get_contents($fileName);
}

function fileGet ($fileName) 
{
    $file = fopen($fileName, 'w');
    fputs($file, 'Hello again!');
    fclose($file);

    return $file;
}