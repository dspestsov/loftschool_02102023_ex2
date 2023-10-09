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

    if (!is_string($args[0])) {
        return 'Ошибка: первый аргумент должен быть строкой, означающей арифметическую операцию.';
    }

    if (!in_array($args[0], $allowOperators)) {
        return 'Ошибка: неизвестная арифметическая операция. Допустимые значения: +, -, *, /, %, **.';
    }

    for ($i = 1; $i < count($args); $i++) {
        if (!is_numeric($args[$i])) {
            return 'Ошибка: все аргументы, кроме первого, должны быть целыми или вещественными числами.';
        }

        if ($i === 1) {
            $result = $args[$i];
            continue;
        }

        switch ($args[0]) {
            case '+':
                $result += $args[$i];
                break;
            case '-':
                $result -= $args[$i];
                break;
            case '*':
                $result = $result * $args[$i];
                break;
            case '/':
                $result = $result / $args[$i];
                break;
            case '%':
                $result = $result % $args[$i];
                break;
            case '**':
                $result = $result ** $args[$i];
                break;
        }
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