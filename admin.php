<?php
    session_start();
    $acess = 'Нет прав, возможны ты игрок геншина';
    if ($_SESSION['user']['id'] != 35) {
        echo $acess;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/club.css">
    <title>админ панель</title>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;">Админ панель</h2>
        <a href="admin/deleteUser.php">Бан пользователей</a><br>
        <a href="admin/deleteClub.php">Удалить клуб</a>
    </div>
</body>
<script>
    //дополнительная проверка
    var security = prompt('Введите ваш пароль');
    if (security != "loh") {
        alert('Неверный пароль');
        window.location.href="index.php";
    }
</script>
</html>