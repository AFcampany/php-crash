<?php 

session_start();

if(isset($_SESSION['username'])){
    echo "<h1>". $_SESSION['username'] ."</h1>";
    echo '<a href="logout.php">logout</a>';
}else{
    echo 'welcome gust';
    echo '<a href="/php-crash/13_sessions.php">Home</a>';    
}

?>