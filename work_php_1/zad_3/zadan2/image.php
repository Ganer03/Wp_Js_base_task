<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if (is_readable(__DIR__ . "/data.php")) {
    $image_array = include __DIR__ . "/data.php";
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
        $id = $_GET['id']; ?>
        <img src="images/<?php echo $image_array[(int)$id] ?>" alt="" height="400px;"
             style="display: block; margin-left: auto; margin-right: auto">
        <?php
    } else {
        echo "Какая-то ошибка, повторите запрос позже";
    }
}
?>

</body>
</html>