<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/club.css">
    <title>Клубы</title>
</head>
<body>
    <a href="club_reg.php" style="float:right">Создать клуб</a>
    <div class="container">
        <h2>Список клубов</h2><br>
        <p style="float:right">Список твоих клубов</p><br>
        <p style="float:right"><?= $_SESSION['club']['club_login'] ?></p>
    </div>
</body>
</html>