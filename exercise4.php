<?php

    function testLoyalty($name){
        
        $countE = substr_count($name, 'E'); 
    
        $countA = substr_count($name, 'A'); 

        $countN = substr_count($name, 'N'); 
      
        
        $countName = strlen($name);
        
        if(($countE + $countA + $countN)>=3){
            if((($countE + $countA +$countN)*$countName)%6==0){
                
                echo "<h1>$name is LOYAL! <br><br>SANA ALL!!</h1>";
            }else{
               
                echo "<h1>$name is DI SURE!<br><br>OUY WALANG TRUST!!</h1>";
            }
        }else{
            echo "<h1>$name is DI SURE! <br><br>OUY WALANG TRUST!!</h1>";
        }
    }
    testLoyalty(" EAN JASON VELAYO ");

?>
