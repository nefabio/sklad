<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="styles/test.css">
    <link rel="stylesheet" href="styles/msg.css">
    <link rel="icon" href="img/groznij.ico">
</head>
<body>
    <form action="database/signup.php" method="post">
      <label>Логин</label>
      <input type="text" name="login" placeholder="Ваш логин">
      <label>Пароль</label>
      <input type="password" name="pass" placeholder="Ваш пароль">
      <label>О себе</label>
      <input type="text" name="about" placeholder="О себе">
      <label>соц сеть</label>
      <input type="text" name="web" placeholder="ссылка">
      <center><button type="submit" class="login-btn">зарегистрируйтесь</button><center>
      <p>Уже есть аккаунт? - <a href="auth.php">Войти!</a></p>
  </div>
      <!--<p class="message">test</p>-->
</body>
<script src="jquery-3.6.0.min.js"></script>
<script src="js/index.js"></script>
</html>