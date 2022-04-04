<?php
if (isset($_POST['submit'])) {
    print_r($_POST); 
}

$name = 'anis';


?>
<br>
<a href="<?php echo $_SERVER['PHP_SELF']?>">click</a>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="prename">ss</label>
        <input type="text" name="prename">
    </div>
    <input type="submit" value="sub" name="submit">
</form>
