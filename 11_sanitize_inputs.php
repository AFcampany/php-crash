<?php
if (isset($_POST['submit'])) {
   
    $name = filter_input(INPUT_POST, 'name',
     FILTER_SANITIZE_SPECIAL_CHARS);
    $prename = filter_input(INPUT_POST, 'prename',
     FILTER_SANITIZE_SPECIAL_CHARS);
    // echo $_POST['name'];
    echo $name;
}




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
