<?php
$link = mysqli_connect("mysql93.1gb.ru", "gb_gb_db", "FX79RWh-CnXS", "gb_gb_db");
if ($link) echo "OK";
else echo "False";
$result = mysqli_query($link,"USE `gb_gb_db`");
if ($result) echo "OK";
else echo "False";
$result = mysqli_query($link,"CREATE TABLE gb_gb_db.`Images` (`id` int(11) not null auto_increment, `path` varchar(256) not null, `size` int(11) not null, `name` varchar(64) not null, `count` int(11) not null ,primary key(`id`))");
if ($result) echo "OK";
else echo "False";
$path="./img";
$file_array=scandir($path);
foreach($file_array as $fileName){
    if($fileName!=".."&&$fileName!="."&&end(explode('.',$fileName))=='jpg'){
        $qr="INSERT INTO Images(path, size,name,count) VALUES ('".$path."','".strval(filesize($path."/".$fileName))."','".$fileName."','0')";
        $result = mysqli_query($link,$qr);    
        echo $qr;    
        if ($result) echo "OK";
        else echo "False";
    }    
}
mysqli_close($link);