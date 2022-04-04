<?php include 'inc/heder.php' ?>
<?php 

  $sql= 'SELECT name,body FROM feedback';
  $result = mysqli_query($conn , $sql);
  var_dump($result);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
  var_dump($feedback);

?>

    <?php if(empty($feedback)) : ?>
      <p class="lead mt3">There no feedback </p>
    <?php endif ?>

    <?php foreach($feedback as $item): ?>

    <h2>Feedback</h2>

    <div class="card my-3 w-75">
      <div class="card-body">
            <?php echo $item['body'] ?>
        <div class="text-secondary mt2">
        <?php echo $item['name'] ?>
      </div>
      </div>
      
   </div>
   <?php endforeach ?>

   




<?php include 'inc/footer.php' ?>
