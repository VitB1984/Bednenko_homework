<?php
	$age = '-3kghui_hH5';
    
    if ($age<0 || !is_numeric($age)) {
        
        echo "Неизвестный возраст";
    }
    
    elseif ($age>=18 && $age<=59 ) {
        
        echo "Вам еще работать и работать";
    }
    
    elseif ($age<18) {
        
        echo "Вам еще рано работать";
    }
  
    else {
        
        echo "Вам пора на пенсию";
    }

?>