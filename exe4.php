<?php 

	    $num1 = 564;
	    $num2 = 354;
	    $num3 = 684;
	    $F = 5;

	    while ($F > 0){
            
            if ($F == 2 && $num2 < $num3){
                
                $T = $num3;
                $num3 = $num2;
                $num2 = $T;
                
            } else if ($num1 < $num2){
                
                $T = $num2;
                $num2 = $num1;
                $num1 = $T;
                
            }
            
            $F --;
  
        }

        echo "$num1<br />$num2<br />$num3";

 ?>