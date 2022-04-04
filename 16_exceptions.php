<?php


function inverse($x)
{
    if(!$x){
        throw new Exception(" division by zero");
    }
    return 1/$x;
}

try {
    echo inverse(5);
    echo inverse(0);
} catch (Exception $e) {
    echo 'Cauth Exception', $e->getMessage();
}finally{
    echo ' first finally';
}

try {
    echo inverse(0);
} catch (Exception $e) {
    echo 'Cauth Exception', $e->getMessage();
}finally{
    echo ' second finally';
}

?>