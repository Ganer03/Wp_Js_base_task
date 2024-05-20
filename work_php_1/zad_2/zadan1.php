<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-1</title>
</head>
<body>

<p1>Задание 1</p1>
<br>
<p1>Таблица истинности:</p1>

<?php
echo "<table>";
echo "<tr> <td> a </td> <td> b </td> <td> && </td> <td> || </td> <td> xor </td> </tr>";
for ($a = 0; $a <= 1; $a++) {
    for ($b = 0; $b <= 1; $b++) {
        $c = (int)($a && $b);
        $d = (int)($a || $b);
        $e = (int)($a xor $b);
        echo "<tr> <td> $a </td> <td> $b </td> <td> $c </td> <td> $d </td> <td> $e </td> </tr>";
    }
}
echo "</table>";
?>

</body>
