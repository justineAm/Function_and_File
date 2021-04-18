<?php
    function myExistingfile($filename,$fileData,$lineNumber){
        if(file_exists($filename)){
            $file = fopen($filename,'a');
            $lines = file($filename,FILE_IGNORE_NEW_LINES);
            array_splice( $lines, $lineNumber-1, 0, $fileData );
            file_put_contents($filename,join("\n",($lines)));
            fclose($file);

        }else{
            echo "File does not exist!";
        }
    }
    function readFiles($filename){
        if(file_exists($filename)){
            $file = fopen($filename,'r');
            $contents = fread($file, filesize($filename));//read file    
            echo "<pre><h1>$contents</h1></pre>";//printing data of file 
            echo $contents[4]; 
            fclose($file);

       }
    }
    readFiles('myText.txt');
    myExistingfile('myText.txt',"This is the inserted Text !",3)

?>
