<?php
    function myExistingfile($filename){
        if(file_exists($filename)){
             $file = fopen($filename,'a');
             fwrite($file,"\nThis the line that is to be inserted to the files soon.");
             fclose($file);

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
    myExistingfile('myText.txt')

?>