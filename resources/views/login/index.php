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
    <title>Авторизация</title>
</head>
<body style="margin: 0 auto; padding-top: 15px; width: 1366px; display: flex;">
<main>
    <?= $menu ?>
    <div>
        <h1>Авторизация</h1>
    </div>
    <div>
        <form>
            <div>
                <input type="text" name="username" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$"
                       id="username" placeholder="Логин / Email" required>
            </div>
            <div>
                <input type="password" name="Пароль" minlength="6" id="password" placeholder="Пароль" required style="margin: 10px 0">
            </div>
            <div>
                <button type="submit">Войти</button>
            </div>
        </form>
    </div>
</main>
</body>
</html>
