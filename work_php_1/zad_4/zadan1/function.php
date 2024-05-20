<?php
function book_feedback()
{
    if (is_readable(__DIR__ . "/data.txt")) {
        $path = __DIR__ . "/data.txt";
        return file($path, FILE_IGNORE_NEW_LINES);
    }
    return $a = [1 => 'Нет ни одной записи'];
}