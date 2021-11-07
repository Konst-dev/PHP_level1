<?php


/* 3.
$a = 5;
$b = '05';
var_dump($a == $b);         // true, т.к. происходит сравнение по значению, но не по типу (строку '0.5' php преобразует в число)
var_dump((int)'012345');     // 12345, строка '012345' преобразовалась в целое число 12345
var_dump((float)123.0 === (int)123.0); // false. Строгое сравнение. false и int - разные типы
var_dump((int)0 === (int)'hello, world'); // true. Справа и слева одинаковый тип. php не смог преобразовать строку в число, поэтому получилось 0
*/

//4.
$h1="Страница на PHP";
$title="Проверка PHP";
$year=date('Y');
?>

<HTML>
    <HEAD>
        <TITLE>
            <?php echo $title ?>
        </TITLE>
    </HEAD>
    <BODY>
        <h1><?php echo $h1 ?></h1>
        <h2><?php echo $year ?></h2>
        <?php
//5.        
           $a=1;
           $b=2;
           echo "<p>a=".$a."  b=".$b."</p>";
           $a=$a+$b;
           $b=$a-$b;
           $a=$a-$b;
           echo "<p>a=".$a."  b=".$b."</p>";
        ?>
    </BODY>
</HTML>    