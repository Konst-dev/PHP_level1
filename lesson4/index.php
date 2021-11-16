<?php
    function createGalery($path){
        $file_array=scandir($path);
        foreach($file_array as $fileName){
            if($fileName!=".."&&$fileName!="."){
                echo "<div class='card'><img src='".$path."/".$fileName."' width='100%'>";
                echo "</div>";
            }

        }
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
   <div class="main_block">

<?php
  createGalery("./img");

?>


   </div> 
</body>
</html>