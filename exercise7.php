<?php

    function reverseHalf($string){
        
        $strLenght = strlen($string);
        echo "<h2>$strLenght is the lenght of the string !!</h2>";
        $reversedSTR = strrev($string);
        if($strLenght%2==0){
           
            //echo $reversedSTR;
            $stringHalflenght = intval(strlen($string)/2);

            $half = substr($string,$stringHalflenght);
            echo "<br><h2>The Half of the reverse string is :</h2><br>";
            echo "<h1>$half<h1>";
           
        }else{
            echo $reversedSTR;
        }
        
    }
    
    reverseHalf("  AMONG MAESTRONG BUT AN NA GWAPONG EAN JASON VELAYO  ");

?>
