<?php
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
        if($b!=0)
            return $a/$b;
        else return "Division by Zero!";
    }
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Calculator</title>
</head>
<body>
    <form method="post">
        <input name="first_num"/>
        <select name="actions">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input  name="second_num"/>
        <input type="submit" value="Вычислить">

        <?php
            //var_dump($_POST);
            if(!empty($_POST)){
                if(is_numeric($_POST['first_num'])&&is_numeric($_POST['second_num']))
                    echo "<p class='result'>{$_POST['first_num']}{$_POST['actions']}{$_POST['second_num']}=".mathOperation($_POST['first_num'],$_POST['second_num'],$_POST['actions'])."</p>";
                else echo "<p class='result'>Неверный формат чисел!</p>";
            }
        ?>
</body>
</html>