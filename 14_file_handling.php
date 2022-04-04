<?php

$file = 'extras/users.text';
var_dump($file);

if(file_exists($file)){
    
    // readfile($file);
    $handle = fopen($file, 'r');
    $content = fread($handle, filesize($file));
    fclose($handle);
    echo $content;
   
}else{
    $handle = fopen($file, 'w');
    $content = "brad\nsara\nmike";
    fwrite($handle, $content);
    fclose($handle);


}
?>