<?php
// include_once "/wamp64/www/vardd/vendor/autoload.php"; 
setcookie('name','anis', time()+60);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

setcookie('name','', time()-1);

?>