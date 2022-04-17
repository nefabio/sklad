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
    <link rel="stylesheet" href="styles/ui.css">
    <link rel="stylesheet" href="styles/msg.css">
    <link rel="icon" href="img/groznij.ico">
    <title>Профиль</title>
</head>
<body>
<form>

    <?php
    $folder = opendir('assets/');

    $i = 0;
    while(false !=($file = readdir($folder))){
    if($file != "." && $file != ".."){
        $images[$i]= $file;
        $i++;
        }
    }
    $random_img=rand(0,count($images)-1);


    //геншин = бот


    ?> 


    <div>
    <?php
    echo '<p style="text-align: center;"><img src="assets/'.$images[$random_img].'" width="200px" alt="саня лох" /></p>';
    ?>

    

    <h2 style="color: #cccccc; text-align: center;"><?= $_SESSION['user']['login'] ?></h2>
    <p style="color: #29FFF5; text-align: center;"><b><?= $_SESSION['user']['about'] ?></b></p>
    <p style="color: #cccccc; text-align: center;">Соц сеть: <b><a href="<?php echo $_SESSION['user']['web'] ?>"><img src="assets/web/inst.png" width="20px"></a></b></p>
    <p style="text-align: center;"><a href="database/logout.php" class="logout">Выйти</a>
    <button type="button" class="btn btn-success" id="loh">Забанить пользователя</button> <a href="index.php" style="text-align: left; color: #A460B5;"> Домой</a></p>
</form>
</div>
</body>
<!--Link Scripts-->
<script src="js/permission.js"></script>
</html>