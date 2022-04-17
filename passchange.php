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
    <title>Смена пароля</title>
</head>
<body>
        <form action="database/save_edit.php" method="post">
            <label>Ваш логин</label><br>
            <input type="text" name="login" placeholder="Ваш логин">
            <label>Новый пароль</lanel><br>
            <input type="password" name="new_pass" placeholder="Новый пароль" class="form-control">
            <p style="text-align: center;"><button type="submit" name="button_new_pass" class="btn-warning">Изменить пароль</button>
        </form>
</body>
</html>