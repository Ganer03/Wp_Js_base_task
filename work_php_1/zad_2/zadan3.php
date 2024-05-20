<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-3</title>
</head>
<body>

<?php
echo "Задание 3<br/>";
echo "Файл существует и присутствует return<br/>";
$x = include("dop/incl.php");
var_dump(include("dop/incl.php"));
echo "Вывод: ", $x, "<br/>";
echo "Файл существует но нет return<br/>";
$x = include("dop/incl1.php");
var_dump(include("dop/incl1.php"));
echo "Вывод: ", $x, "<br/>";
echo "Файл существует и он текстовый<br/>";
var_dump(include("Задание_2.txt"));
echo "<br/>";
echo "Файл не существует<br/>";
$x = include("dop/incl2.php");
echo "Вывод: ", $x, "\n";
?>

</body>
