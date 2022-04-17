<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Складочки</title>
    <link rel="stylesheet" href="styles/ui.css">
    <link rel="icon" href="img/groznij.ico">
</head>
<body>
    <div class="all">
        <ul>
            <li><a href="home.php" style="font-family: Arial;">Домой</a></li>
            <li><a href="users.php" style="font-family: Arial;" id="permi">Пользователи</a></li>                
            <li style="float:right"><a class="active" href="profile.php" style="font-family: Arial;"><?= $_SESSION['user']['login'] ?></a></li>
        </ul>
    </div>
    <div class="content">
        <div class="main">
        <h1 style="font-family: Arial;">Проекты</h1>
        <p style="font-family: Arial;">Список наших проектов - <a href="https://discord.com/api/oauth2/authorize?client_id=959805288775553147&permissions=8&scope=bot">дискорд бот</a>,<a href="tgbot.php"> телеграм бот</a> и <a href="https://discord.gg/BAHqqDPFMm">дискорд сервер</a></p>
    </div>
</body>
<script>
</script>
</html>