<?php
ob_start();
include_once "menu.php";
$menu = ob_get_clean();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
</head>
<body style="margin: 0 auto; padding-top: 15px; width: 1366px; display: flex;">
<main>
    <?= $menu ?>
    <div>
        <h1>Категория ...</h1>
    </div>
    <div>
        <?php foreach ($newsTitles as $news): ?>
            <p><a href="#"><?= $news['title'] /*?? ''*/ ?></a></p>
        <?php endforeach; ?>
    </div>
</main>
</body>
</html>