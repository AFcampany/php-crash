<?php
session_start();

if (isset($_POST['submit'])) {
   
    $username = filter_input(INPUT_POST, 'username',
     FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if($username == 'john' && $password  == '123'){
        $_SESSION['username']= $username;
        header('Location: /php-crash/extras/dashboard.php');
    }else{
        echo 'incorect information';
    }
}




?>
<br>
<a href="<?php echo $_SERVER['PHP_SELF']?>">click</a>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <div>
        <label for="username">username</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">password</label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="sub" name="submit">
</form>
