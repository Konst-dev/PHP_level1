<?php
//1
    $i=0;
    echo "<h1>Задание 1:</h1>";
    echo "<p>";
    While ($i<=100){ 
        if ($i%3==0) echo $i."  ";
        $i++;
    }
    echo "</p>";

    //2
    echo "<h1>Задание 2:</h1>";
    $i=0;
    do{
        if($i==0) echo "<p>".$i." - ноль.</p>";
        else if ($i%2==0) echo "<p>".$i." - четное число.</p>";
        else echo "<p>".$i." - нечетное число.</p>";
    }while ($i++<10);

//3
    echo "<h1>Задание 3:</h1>";
    $region_array=[];
    $region_array['Московская область']=['Москва', 'Зеленоград', 'Клин'];
    $region_array['Ленинградская область']=['Санкт-Петербург','Всеволожск','Павловск','Кронштадт', 'Волхов', 'Тихвин','Гатчина'];
    $region_array['Рязанская область']=['Рязань', 'Касимов', 'Сасово','Скопин'];
    foreach($region_array as $region=>$value){
        echo "<p><b>".$region.":</b> ";
        foreach($value as $town) echo $town.'; ';
    }
    echo "</p>";

//4
    echo "<h1>Задание 4:</h1>";   
    $translate_array=['а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'yo','ж'=>'zh',
                      'з'=>'z','и'=>'i','й'=>'iy','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o',
                      'п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'ts',
                      'ч'=>'ch','ш'=>'sh','щ'=>'shch','ъ'=>"'",'ы'=>'y','ь'=>"'",'э'=>'e','ю'=>'yu','я'=>'ya',' '=>' ']; 
    function translate($str){
        $s="";
        global $translate_array;
        for($i=0;$i<mb_strlen($str,'UTF-8');$i++)
            $s=$s.$translate_array[mb_substr($str,$i,1,'UTF-8')];
        return $s;       
    }
    $myString="строка для транслитерации";
    echo "<p><b>До транслитерации:</b> ".$myString."</p>";
    echo "<p><b>После транслитерации:</b> ".translate($myString)."</p>";

//5
    echo "<h1>Задание 5:</h1>";
    function spaceTo_($str){
        $s="";
        for($i=0;$i<mb_strlen($str,'UTF-8');$i++)
            if (mb_substr($str,$i,1,'UTF-8')==" ") $s=$s."_";
            else $s=$s.mb_substr($str,$i,1,'UTF-8');
        return $s;
    }
    echo "<p><b>С пробелами:</b> ".$myString."</p>";
    echo "<p><b>Без пробелов:</b> ".spaceTo_($myString)."</p>";

//6
    echo "<h1>Задание 6:</h1>";
    $menu_Array=['Пункт1'=>'URL1',
                 'Пункт2'=>
                            ['Подпункт1'=>
                                            ['ПодПодпункт1'=>'URL5','ПодПодпункт2'=>'URL6'],
                            'Подпункт2'=>'URL3',
                            'Подпункт3'=>'URL4'],
                 'Пункт3'=>'URL5',
                 'Пункт4'=>'URL7'];
    function genList($menu){
        if (count($menu)>0){
            echo "<ul>";
            foreach($menu as $li=>$url){
                if (gettype($url)=="array"){
                    echo "<li>".$li."</li>";
                    genList($url);
                }    
                else{
                    echo "<li><a href='".$url."'>".$li."</a></li>";
                }
            }
            echo "</ul>";
        }

    }
    genList($menu_Array);

//7
    echo "<h1>Задание 7:</h1>"; 
    for($i=0;$i<10;print($i++." "));

//8
    echo "<h1>Задание 8:</h1>"; 
    foreach($region_array as $region=>$value){
        echo "<p><b>".$region.":</b> ";
        foreach($value as $town)
        if (mb_substr($town,0,1,'UTF-8')=="К") echo $town.'; ';
    }
    echo "</p>";    

//9
    echo "<h1>Задание 9:</h1>";
    function translateTo_($str){
        return spaceTo_(translate($str));
    }
    echo "<p><b>Исходная строка:</b> ".$myString."</p>";
    echo "<p><b>После преобразования:</b> ".translateTo_($myString)."</p>";

    