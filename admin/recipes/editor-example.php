<?php $page_title = 'CREATE'; ?>


<?php require_once __DIR__  . '/../../_global/header.php';?>
<?php require_once __DIR__  . '/../../_includes/functions.php';?>

<body>
  <h1>Recipes</h1>
  <form action="" method="post">
    <input type="text" name="title" placeholder="Title">
    <br>
    <label for="">Ingredients</label>
    <br>
    <textarea class="js-content-editor" name="ingredients" id="" cols="30" rows="10"></textarea>
    <br>
    <label for="">Instructions</label>
    <br>
    <textarea class="js-content-editor" name="instructions" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="submit">
  </form>
  <?php
    // Step 5: Close Database Connection
    mysqli_close($connection);
  ?>

  <script>
    tinymce.init({
      selector: '.js-content-editor',
      plugins: 'advlist autolink lists bullist link hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
  </script>
<div class="footer">
    <a href="<?php siteUrl('/home.php'); ?>"><img src="../../dist/images/foodie.png" alt="banner"></a>
</div>


</body>

</html>