<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-2</title>
</head>
<body>

<p1>Задание 2</p1>
<br>

<p1>Введите коэффициент a,b,c квадратного уравнения</p1>

<form action="" method="GET">
    <label>
        <div class="a-styler"> a</div>
        <input name="a"
               value="<?php if (isset($_GET['a']) && is_numeric($_GET['a'])) echo $_GET['a']; ?>">
    </label>
    <label>
        <div class="a-styler"> b</div>
        <input name="b"
               value="<?php if (isset($_GET['b']) && is_numeric($_GET['b'])) echo $_GET['b']; ?>">
    </label>
    <label>
        <div class="a-styler"> c</div>
        <input name="c"
               value="<?php if (isset($_GET['c']) && is_numeric($_GET['c'])) echo $_GET['c']; ?>">
    </label>
    <input type="submit">
</form>

<?php
if (is_readable(__DIR__ . "/function.php")) {
    include __DIR__ . "/function.php";
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && (isset($_GET['a']) && is_numeric($_GET['a'])) && (isset($_GET['b']) && is_numeric($_GET['b'])) && (isset($_GET['c']) && is_numeric($_GET['c']))) {
        $a = (int)$_GET['a'];
        $b = (int)$_GET['b'];
        $c = (int)$_GET['c'];
        echo "Дискриминант: ";
        switch (discriminate($a, $b, $c) !== null) {
            case false:
                echo "Отрицательный дискриминант<br/>";
                break;
            case true:
                echo discriminate($a, $b, $c) . "<br/>" . "<br/>";
                break;
        }
    } else {
        echo "<p1>Вы ввели не все коэффициенты или ввели их неправильно</p1><br>";
    }
} else {
    echo "<p1 style='color: red;'>Какая-то ошибка,повторите позже</p1>";
}
?>

<style>
    form {
        display: grid;
        width: 100px;
    }

    label {
        padding: 5px;
        display: flex;
    }

    .a-styler {
        margin-right: 10px;
    }
</style>

</body>
