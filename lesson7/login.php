<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Вход</title>
</head>
<body>
  <form method="POST" action="./login.php">
    <input class="input" type="email" name="email" placeholder="E-mail"/>
    <input class="input" type="password" name="password" placeholder="Пароль"/>
    <input type="submit" value="Войти"/>
  </form>    
</body>
</html>

<?php
    if (isset($_COOKIE['is_logged_in'])){
        header('location: ./goods.php');
        die();
    }
    else if (isset($_POST['email'],$_POST['password'])){
        require_once('database.php');
        global $dblink;
        $result=mysqli_query($dblink,"select * from `Users` where `E-mail`='".$_POST['email']."'");
        $result=mysqli_fetch_assoc($result);
        if(password_verify($_POST['password'],$result['password'])){
            setcookie('is_logged_in','1',time()+3600*24*7);
            header('location: ./goods.php');
            die();
        }
        echo "Неверный логин/пароль";
    }
