<?php
    $image_id=$_GET['image_id'];
    $link = mysqli_connect("mysql93.1gb.ru", "gb_gb_db", "FX79RWh-CnXS", "gb_gb_db");
    $result = mysqli_query($link,"USE `gb_gb_db`");
    $result = mysqli_query($link,"select * from Images where id={$image_id}");
    $row = mysqli_fetch_assoc($result);
    $result = mysqli_query($link,"update Images set count=count+1 where id={$image_id}");
    mysqli_close($link);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body>
       <?php
            echo "<img src='{$row['path']}/{$row['name']}'>";
            echo "<p class='text'><b>Просмотров</b>: {$row['count']}; <b>Имя файла</b>: {$row['name']}</p>";
       
       ?>
    </body>
    </html>
    
