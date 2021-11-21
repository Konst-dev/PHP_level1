<?php
    function createGalery(){
        $link = mysqli_connect("mysql93.1gb.ru", "gb_gb_db", "FX79RWh-CnXS", "gb_gb_db");
        $result = mysqli_query($link,"USE `gb_gb_db`");
        $result = mysqli_query($link,"select * from Images where 1 order by count DESC");
        //$result = mysqli_query($link,"SELECT * FROM Images");
        $epms = array();
        while($row = mysqli_fetch_assoc($result))
            $epms[] = $row;
        foreach($epms as $rows){
            echo "<div class='card'><img class='card_image' id='i_{$rows['id']}' src='{$rows['path']}/{$rows['name']}' width='100%'>";
            echo "</div>";

        }

                echo "<p>{$names['name']}</p>";
        mysqli_close($link);

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id='modal' class="modal">

    </div>


        <div class="main_block">

          <?php
            createGalery();

         ?>



        <script src='./js/script.js'></script>
   </div> 
</body>
</html>