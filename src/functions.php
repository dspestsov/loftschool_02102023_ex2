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