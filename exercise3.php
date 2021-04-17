<?php

function randomLiner($filename){
        
        #openfile
    $file = "myText.txt" ;
    $document = fopen($file,'r');

    $text =  fread($document,filesize("myText.txt"));
    //echo $text;
    fclose($document);  
    echo "<br><br>";
    #vowelcount
    $vowels = array("a", "e", "i", "o", "u"); 

    $length = strlen($text);
    $count = 0; 
    for ($i =0; $i < $length; $i++){
        if (array_search($text[$i], $vowels)){
            $count++; 
        }
    }
    
    $alllines = file($file); 
    if($count%2!=0){
        echo "The number of vowels are $count<br><br>";
        echo "The 3rd Line of the file is <br>";
        echo ("<h3>$alllines[2]</h3>");
    }else{
        echo "The number of vowels are $count<br>";
        echo ($alllines[3]);
    }

    }
    function readFiles($filename){
        if(file_exists($filename)){
            $file = fopen($filename,'r');
            $contents = fread($file, filesize($filename));//read file    
            echo "<pre>$contents</pre>";//printing data of file  
            fclose($file);

       }
    }
    readFiles('myText.txt');
    randomLiner('myText.txt')
?>