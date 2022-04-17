<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/test.css">
    <title>Создать клуб</title>
</head>
<body>
    <form action="database/club/signup.php" method="post">
        <label>Название</label>
        <input type="text" name="club_login" placeholder="Название">
        <label>Описание</label>
        <input type="text" name="club_desc" placeholder="Описание клуба">
        <label>Чёрный список <a href="id.php">id</a> (beta)</label>
        <input type="text" name="list" placeholder="Чёрный список">
        <p style="text-align: center;"><button type="submit" class="login-btn">Создать клуб</button></p>
    </form>
</body>
</html>