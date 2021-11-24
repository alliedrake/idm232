<?php
$page_title = 'Edit Recipe';?>

<?php require_once __DIR__  . '/../../_global/header.php';?>

<?php

if (isset($_GET['id'])) {
    $recipe_id = $_GET['id'];

    // Build Query
    $query .= 'SELECT * ';
    $query .= 'FROM add_recipes ';
    $query .= 'WHERE id=' . $recipe_id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results && $db_results->num_rows > 0) {
        // Get row from results and assign to $user variable;
        $recipe = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/recipes?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/recipes');
}
?>


<div class="viewcontainer">
    <h1><?php echo $recipe['title']; ?>
    </h1>

    <p>Description: <?php echo $recipe['description']; ?>
    </p>
    <p>Servings: <?php echo $recipe['servings']; ?>
    
    <div class='view'>
    <a class="editbutton" href="<?php siteUrl('/admin/recipes/edit_recipe.php?id=')?><?php echo $recipe['id'];?>">Edit</a>

    <a class="deletebutton" href="<?php siteUrl('/admin/recipes/delete_recipe.php?id=')?><?php echo $recipe['id'];?>">Delete</a>
</div>
</div>
        

<?php require_once __DIR__  . '/../../_global/footer.php';?>

</body>
<html>