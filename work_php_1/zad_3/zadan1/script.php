<?php
if (is_readable(__DIR__ . "/operation.php")) {
    include __DIR__ . "/operation.php";
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['a']) && isset($_GET['sign']) && isset($_GET['b']) && $_GET['a'] != "" && $_GET['b'] != "") {
            $a = $_GET['a'];
            $b = $_GET['b'];
            $sign = $_GET['sign'];
            echo $a . $sign . $b . "= ";
            echo operation($sign, $a, $b);
        } else {
            echo "Вы ввели не все коэффициенты";
        }
    } else {
        echo "Какие-то неполадки,зайдите позже";
    }
}