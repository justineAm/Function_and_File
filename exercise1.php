           

<?php
function fileLine($filename,$lineNumber){
    $lines = $filename;
    $desired_line = $lineNumber-1;
    $line_counter = 0; 
     $fh = fopen('mytext.txt','r') or die($php_errormsg);
      while ((! feof($fh)) && ($line_counter <= $desired_line)) {
           if ($s = fgets($fh,1048576)) {
                $line_counter++; 
            } 
        } 
        fclose($fh) or die($php_errormsg);
        echo "The text of the line $desired_line of the text file is : ";
        echo "<br>";
        print "<h3>$s</h3>"; 
   
}
fileLine("myText",2)

?>
