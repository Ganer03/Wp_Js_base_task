<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="text-align: center">
    <h1>Гостевая книга:</h1>

    <?php
    if (is_readable(__DIR__ . "/function.php")) {
        include __DIR__ . "/function.php";
        foreach (book_feedback() as $value) {
            echo "<h4>-$value</h4>";
        }
    } else {
        echo "Какая-то ошибка, повторите позже";
    }
    ?>

</div>
<form action="add.php" method="POST" style="display: grid; justify-content: center;">
        <p style="text-align: center;">Ваш отзыв</p>
    <label>
        <textarea name="feedback" style="width:400px; height:200px;"></textarea>
    </label>
    <button type="submit">отправить</button>
</form>

</body>
</html>
