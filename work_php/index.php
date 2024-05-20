<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-1</title>
</head>
<body>

<h1>Hello friends</h1>

<?php

var_dump(2 * 2);
var_dump(3 / 1);
var_dump(1 / 3);
var_dump('10cats' + 40);

var_dump(18 % 4);

echo ($a = 2);
$x = ($y = 12) - 8; echo $x;

var_dump(1 == 1.0);
var_dump(1 === 1.0);
var_dump('02' == 2);
var_dump('02' === 2);
var_dump('02' == '2');

$x = false xor true;
var_dump($x);

$a = 1.0;
$b = 5;
var_dump(+$a);
var_dump(-$a);
var_dump($a ** $a);
$a = 1.33;
echo fmod($b,$a);
var_dump($a <=> $b);
$action = $_POST['action'] ?? 'default';
echo $action;
$action = (empty($_POST['action'])) ? 'default' : $_POST['action'];
echo $action;

?>

</body>
</html>
