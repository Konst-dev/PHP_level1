<?php
//1  
    echo "<p>";  
    $a=5;
    $b=-3;
    if($a>=0&&$b>=0)echo $a-$b;
    else if ($a<0&&$b<0) echo $a*$b;
    else echo $a+$b;
    echo "</p>";


//2  вариант без break  
echo "<p>";
    $a=8;    
    switch ($a)
    {
        case 0:
            echo "0  ";
        case 1:
            echo "1  ";
        case 2:
            echo "2  ";
        case 3:
            echo "3  ";
        case 4:
            echo "4  ";
        case 5:
            echo "5  ";
        case 6:
            echo "6  ";
        case 7:
            echo "7  ";
        case 8:
            echo "8  ";
        case 9:
            echo "9  ";
        case 10:
            echo "10  ";
        case 11:
            echo "11  ";
        case 12:
            echo "12  ";
        case 13:
            echo "13  ";
        case 14:
            echo "14  ";
        case 15:
            echo "15";

    }
    echo "</p>";

//2  вариант c break  
    echo "<p>";
    $a=8;    
    switch ($a)
    {
        case 0:
            echo "0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15";
            break;
        case 1:
            echo "1 2 3 4 5 6 7 8 9 10 11 12 13 14 15";
            break;
        case 2:
            echo "2 3 4 5 6 7 8 9 10 11 12 13 14 15";
            break;
        case 3:
            echo "3 4 5 6 7 8 9 10 11 12 13 14 15";
            break;
        case 4:
            echo "4 5 6 7 8 9 10 11 12 13 14 15";
            break;
        case 5:
            echo "5 6 7 8 9 10 11 12 13 14 15";
            break;
        case 6:
            echo "6 7 8 9 10 11 12 13 14 15";
            break;
        case 7:
            echo "7 8 9 10 11 12 13 14 15";
            break;
        case 8:
            echo "8 9 10 11 12 13 14 15";
            break;
        case 9:
            echo "9 10 11 12 13 14 15";
            break;
        case 10:
            echo "10 11 12 13 14 15";
            break;
        case 11:
            echo "11 12 13 14 15";
            break;
        case 12:
            echo "12 13 14 15";
            break;
        case 13:
            echo "13 14 15";
            break;
        case 14:
            echo "14  15";
            break;
        case 15:
            echo "15";
            break;

    }
    echo "</p>";
