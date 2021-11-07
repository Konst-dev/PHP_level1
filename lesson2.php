<?php
//1  
    echo "<h1>Задание 1:</h1>";
    echo "<p>";  
    $a=5;
    $b=-3;
    if($a>=0&&$b>=0)echo $a-$b;
    else if ($a<0&&$b<0) echo $a*$b;
    else echo $a+$b;
    echo "</p>";


//2  вариант без break  
echo "<h1>Задание 2:</h1>";
echo "<p> Без использования break: ";
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
    echo "<p> С использованием break: ";
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

//3
    function sum($a,$b){
        return $a+$b;
    }
    function sub($a,$b){
        return $a-$b;
    }
    function mul($a,$b){
        return $a*$b;
    }
    function div($a,$b){
        return $a/$b;
    }

//4
    echo "<h1>Задание 4:</h1>";
    function mathOperation($arg1, $arg2, $operation){
        switch ($operation)
        {
            case '+':
                return sum($arg1, $arg2);
            case '-':
                return sub($arg1, $arg2);  
            case '*':
                return mul($arg1, $arg2);
            case '/':
                return div($arg1, $arg2); 
        }
    }
    echo "<p>5+7=".mathOperation(5,7,'+')."</p>";
    echo "<p>5-2=".mathOperation(5,2,'-')."</p>";
    echo "<p>3*8=".mathOperation(3,8,'*')."</p>";
    echo "<p>15/3=".mathOperation(15,3,'/')."</p>";

//5 уже было в первом уроке

//6
    echo "<h1>Задание 6:</h1>";
    function power($val, $pow){
        if ($pow==0) return 1;
        else return $val*power($val,$pow-1);
    }
    echo "2^8=".power(2,8);

//7
    function writeTime(){
        $h=date('H');
        $m=date('i');

        $hours="";
        if ($h==1||$h==21) $hours="час";
        else if ($h>1&&$h<5) $hours="часа";
        else $hours="часов";
        
        $minutes="";
        if($m%10==1&&($m<10||$m>20))$minutes="минута";
        else if($m%10>=2&&$m%10<=4&&($m<10||$m>20))$minutes="минуты";
        else $minutes="минут";
        echo "<p>".$h." ".$hours." ".$m." ".$minutes."</p>";
    }
    writeTime();