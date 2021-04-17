<?php

    function factorial($number){
          
        if($number<0){
            $number = (abs($number));
        }else{
            $number = $number;
        }
        $factorial = 1; 
        for ($i=$number; $i>=1; $i--)   {  
            $factorial = $factorial * $i;  
        }  
        echo "<h1>Factorial of $number is $factorial<h1>";  
    
    }

    factorial(-8);
?>