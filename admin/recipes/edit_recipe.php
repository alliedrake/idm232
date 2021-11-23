<?php
$page_title = 'Edit Recipe';
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php'; ?>

<?php

if (isset($_POST['update'])) {
  $recipe_id = $_POST['recipe_id'];
  // Make sure GET ID == post ID
  if ($_GET['id'] != $recipe_id) {
      redirectTo('/admin/recipes/edit.php?id=' . $_GET['id'] . '&error=User ID does not match current recipe.');
  }
  //  Parse Data
  $title = mysqli_real_escape_string($db_connection, $_POST['title']);
  $prep_time = mysqli_real_escape_string($db_connection, $_POST['prep_time']);
  $cook_time = mysqli_real_escape_string($db_connection, $_POST['cook_time']);
  $servings = mysqli_real_escape_string($db_connection, $_POST['servings']);
  $description = mysqli_real_escape_string($db_connection, $_POST['description']);
  $image = mysqli_real_escape_string($db_connection, $_POST['image']);
  $ingredients = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
  $step_1 = mysqli_real_escape_string($db_connection, $_POST['step_1']);
  $step_2 = mysqli_real_escape_string($db_connection, $_POST['step_2']);
  $step_3 = mysqli_real_escape_string($db_connection, $_POST['step_3']);
  $step_4 = mysqli_real_escape_string($db_connection, $_POST['step_4']);
  $step_5 = mysqli_real_escape_string($db_connection, $_POST['step_5']);
  $step_6 = mysqli_real_escape_string($db_connection, $_POST['step_6']);
  $file_id = mysqli_real_escape_string($db_connection, $_POST['file_id']);

  // Build Query
  $query = 'UPDATE add_recipes ';
  $query .= 'SET ';
  $query .= "title = '{$title}', ";
  $query .= "prep_time = '{$prep_time}', ";
  $query .= "cook_time = '{$cook_time}', ";
  $query .= "servings = '{$servings}', ";
  $query .= "description = '{$description}', ";
  $query .= "image = '{$image}', ";
  $query .= "ingredients = '{$ingredients}', ";
  $query .= "step_1 = '{$step_1}', ";
  $query .= "step_2 = '{$step_2}', ";
  $query .= "step_3 = '{$step_3}', ";
  $query .= "step_4 = '{$step_4}', ";
  $query .= "step_5 = '{$step_5}', ";
  $query .= "step_6 = '{$step_6}' ";
  $query .= "WHERE id = {$recipe_id}";

  // Execute Query
  $db_results = mysqli_query($db_connection, $query);

  if ($db_results && $db_results->num_rows > 0) {
      // Success
      redirectTo('/admin/recipes?success=Recipe Updated');
  } else {
      // Error
      redirectTo('/admin/recipes/edit_recipe.php?id=' . $recipe_id . '&error=' . mysqli_error($db_connection));
  }
} elseif (isset($_GET['id'])) {
  $recipe_id = $_GET['id'];




  // Build Query
  $query .= 'SELECT * ';
  $query .= 'FROM add_recipes ';
  $query .= 'WHERE id=' . $recipe_id;

  $db_results = mysqli_query($db_connection, $query);
  if ($db_results) {
      $recipe = $row = mysqli_fetch_assoc($db_results);
  } else {
      // Redirect user if ID does not have a match in the DB
      redirectTo('/admin/recipes?error=' . mysqli_error($db_connection));
  }
} else {
  // Redirect user if no ID is passed in URL
  redirectTo('/admin/recipes');
}
?>



<div class="container">
<h1>Edit Recipe</h1>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/_components/alert.php'; ?>
<form action="" method="POST">

  <label for="">Recipe Title</label>
  <input type="text"
    value="<?php echo $recipe['title']; ?>"
    name="title">

  <label for="">Prep Time</label>
  <input type="text"
    value="<?php echo $recipe['prep_time']; ?>"
    name="prep_time">

  <label for="">Cook Time</label>
  <input type="text"
    value="<?php echo $recipe['cook_time']; ?>"
    name="cook_time">

  <label for="">Servings</label>
  <input type="text"
    value="<?php echo $recipe['servings']; ?>"
    name="servings">

  <label for="">Description</label>
  <input type="text"
    value="<?php echo $recipe['description']; ?>"
    name="description">

  <label for="">Ingredients</label>
  <input type="text"
    value="<?php echo $recipe['ingredients']; ?>"
    name="ingredients">

  <label for="">Step 1</label>
  <input type="text"
    value="<?php echo $recipe['step_1']; ?>"
    name="step_1">

  <label for="">Step 2</label>
  <input type="text"
    value="<?php echo $recipe['step_2']; ?>"
    name="step_2">

  <label for="">Step 3</label>
  <input type="text"
    value="<?php echo $recipe['step_3']; ?>"
    name="step_3">

  <label for="">Step 4</label>
  <input type="text"
    value="<?php echo $recipe['step_4']; ?>"
    name="step_4">

  <label for="">Step 5</label>
  <input type="text"
    value="<?php echo $recipe['step_5']; ?>"
    name="step_5">

  <label for="">Step 6</label>
  <input type="text"
    value="<?php echo $recipe['step_6']; ?>"
    name="step_6">

  <input type="hidden"
    value="<?php echo $recipe['id']; ?>"
    name="recipe_id">

  <br>
  <br>
  <input class="button" name="update" type="submit" value="Update" id="submitbutton">

</form>
</div>


<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/footer.php'; ?>