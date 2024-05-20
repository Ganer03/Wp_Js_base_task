<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-4</title>
</head>
<body>

<p1>Задание 4</p1>
<br>
<p1>Введите имя:</p1>

<form action="" method="POST">
    <label>
        <div class="a-styler"> name</div>
        <input name="user"
               value="<?php if (isset($_POST['user']) && (int)$_POST['name'] === 0 && $_POST['name'] !== '0') echo $_POST['user']; ?>">
    </label>
    <input type="submit">
</form>

<?php
if (is_readable(__DIR__ . "/function.php")) {
    include __DIR__ . "/function.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST['name']) && (int)$_POST['name'] === 0 && $_POST['name'] !== '0') {
        $name = (string)$_POST['user'];
        echo "Пол: ";
        switch (genders($name)) {
            case null:
                echo "Не могу определить";
                break;
            default:
                echo genders($name);
                break;
        }
    } else {
        echo "<p1>Вы не ввели имя или ввели его неправильно</p1><br>";
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