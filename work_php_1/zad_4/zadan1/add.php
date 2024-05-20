<?php
if (is_readable(__DIR__ . "/function.php") &&
    $_SERVER['REQUEST_METHOD'] == 'POST' &&
    isset($_POST['feedback']) && $_POST['feedback'] !== "") {
    include __DIR__ . "/function.php";
    $array1 = book_feedback();
    $array1[] = $_POST['feedback'];
    file_put_contents(__DIR__ . "/data.txt", implode("\n", $array1));
}
header('Location: zadan1.php');
exit();