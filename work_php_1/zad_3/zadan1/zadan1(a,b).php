<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-1</title>
</head>
<body>

<p>Задание 1(a,b)</p>
Введите 2 числа и знак, который вам нужен

<form action="script.php" method="GET">
    <label>
        <input name="a" type="number"
               value="<?php if (isset($_GET['a']) && is_numeric($_GET['a'])) echo $_GET['a']; else echo 0; ?>">
    </label>
    <label>
        <select size="1" name="sign">
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="%">%</option>
        </select>
    </label>
    <label>
        <input name="b" type="number"
               value="<?php if (isset($_GET['b']) && is_numeric($_GET['b'])) echo $_GET['b']; else echo 0; ?>">
    </label>
    <input type="submit" value="=">
</form>

</body>
</html>