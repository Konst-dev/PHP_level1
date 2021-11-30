
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Магазин</title>
</head>
<body>

<?php
    session_start();
    function addID(){
        $ids=array();
        if(isset($_SESSION['ids']))
            $ids=$_SESSION['ids'];
        $id=$_GET['id'];
        if (!in_array($id,$ids))
        $ids[]=$id;
        $_SESSION['ids']=$ids;
    }
    if (isset($_GET['id'])){
        addID();
       header('location: ./goods.php'); 
    }
    if (!isset($_COOKIE['is_logged_in'])){
        echo "<p>Необходимо <a href='./login.php'>ВОЙТИ</a> или <a href='./login.php'>ЗАРЕГИСТРИРОВАТЬСЯ</a></p>";
    }
    else{
        require_once('database.php');
        global $dblink;
        $result = mysqli_query($dblink,"select * from Goods where 1");
        $goods = array();
        while($row = mysqli_fetch_assoc($result))
            $goods[] = $row;
        echo "<div class='basket'>"; 
        echo "<h2>Корзина:</h2>";       
        $ids=array();
        if(isset($_SESSION['ids'])){
            $ids=$_SESSION['ids'];
            foreach($ids as $goodID){
                $result=mysqli_query($dblink,"select * from `Goods` where `id`='".$goodID."'");
                $result=mysqli_fetch_assoc($result);
                echo "<p><b>".$result['name']."</b>  Цена: ".$result['price']."</p>" ;
            }
                
        }
        else{
            echo "Пусто";
        }
        echo "</div>";
        echo "<div class='wrapper'>";
        foreach($goods as $good){
            echo "<div class='card' id='".$good['id']."'>";
            echo "<h2 class='title'>".$good['name']."</h2>";
            echo "<p class='text'>Цена: ".$good['price']."</p>";
            echo "</div>";
        }


        echo "</div>";
            
    

    }

?>
    <script src="./js/script.js"></script>
</body>
</html>
