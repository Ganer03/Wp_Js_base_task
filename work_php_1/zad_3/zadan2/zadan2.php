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
$image_array = include __DIR__ . "/data.php";
foreach ($image_array as $item => $value) {
    ?>
    <a href="<?php echo 'image.php?id=' . $item ?>">
        <img src="images/<?php echo $value ?>" alt="" height="200px;">
    </a>
<?php } ?>

</body>
</html>