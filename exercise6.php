<?php

    function primeOrnot($num){
        if ($num == 1)
        return 0;
        for ($i = 2; $i <= $num/2; $i++){
            if ($num % $i == 0)
            return 0;
        }
        return 1;
    }
    $number = 5;
    $flag_val = primeOrnot($number);

    if ($flag_val == 1){
        echo "<h1>$number  is a prime number</h1>";
    }
   
    else{
        echo "<h1>$number is a non-prime number<h1>";
    }
    
        

?>