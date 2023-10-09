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