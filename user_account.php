<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мій акаунт</title>
</head>
<body>
    <p>Акк юзера з логіном <?php echo $_SESSION['login'];?></p>
    <a href="logout.php" >Вийти</a>
</body>
</html>
