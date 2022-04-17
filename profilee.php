<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/groznij.ico">
    <title>Бан</title>
</head>
<body>
    <h3 style="text-align: center; padding-top: 50px;">Ошибка 423</h3><br>
    <p style="text-align: center; padding-top: 40px;">Ваш профиль заблокирован</p><br>
    <p style="text-align: center; padding-top: 30px;"><button type="submit" class="btn btn-success" id="loh">Что? Почему?</button></p>
</body>
    <script>
        document.querySelector('#loh').onclick = function() {
            alert('Ваш аккаунт заблокирован либо за нарушении правил, либо вы ботсикй бот!');
        }
    </script>
</html>