<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Регистрация</title>
</head>
<body>
  <form method="POST" action="./register.php">
    <input class="input" type="text" name="FIO" placeholder="ФИО"/>
    <input class="input" type="email" name="email" placeholder="E-mail"/>
    <input class="input" type="password" name="password" placeholder="Пароль"/>
    <input type="submit" value="Регистрация"/>
  </form>    
</body>
</html>

<?php
  require_once './database.php';
  if (isset($_POST['FIO'],$_POST['email'],$_POST['password'])){
      global $dblink;
      $result=mysqli_query($dblink,"select * from `Users` where `E-mail`='".$_POST['email']."'");
      $row = mysqli_fetch_assoc($result);
   //   var_dump($row);
      if (!empty($row)){
          echo "Пользователь с таким E-mail уже существует!";
          mysqli_close($dblink);
      }
      else{
        $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $query="INSERT INTO gb_gb_db.Users(`FIO`,`E-mail`,`password`) VALUES ('".$_POST['FIO']."','".$_POST['email']."','".$password."')";
        mysqli_query($dblink,$query); 
        mysqli_close($dblink);
        header('location: ./login.php');
      }
  }


