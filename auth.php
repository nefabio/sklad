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
    <title>Вход</title>
    <link rel="stylesheet" href="styles/test.css">
    <link rel="icon" href="img/groznij.ico">
</head>
<body>
  <center>
    <form action="database/signin.php" method="post">
      <label>Логин</label>
      <input type="text" name="login" placeholder="Ваш логин">
      <label>Пароль</label>
      <input type="password" name="pass" placeholder="Ваш пароль">
      <button type="submit">войти</button>
      <p><a href="passchange.php">Забыли пароль?</a></p>
      <p>Нет аккаунта? - <a href="register.php">Зарегистрируйтесь!</a></p>
<center>
</body>
<!--Link Some Scripts-->
<script src="jquery-3.6.0.min.js"></script>
<script src="js/index.js"></script>
</html>