<?php $page_title = "CREATE"; ?>

<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php'; ?>

<?php

if (isset($_POST['submit'])) {

//Upload Image 



//  Submit rest of the form
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


$query = 'INSERT INTO add_recipes (title, prep_time, cook_time, servings, description, image, ingredients, step_1, step_2, step_3, step_4, step_5, step_6)';
$query .= "VALUES ('{$title}', '{$prep_time}', '{$cook_time}', '{$servings}', '{$description}', '{$image}', '{$ingredients}', '{$step_1}','{$step_2}','{$step_3}', '{$step_4}', '{$step_5}', '{$step_6}')";



$results = mysqli_query($db_connection, $query);
if ($db_results && $db_results->num_rows > 0) {
    // Success
    redirectTo('/admin/recipes/');
} else {
    // Error
    redirectTo('/admin/recipes/index.php?error=' . mysqli_error($db_connection));
}
}

?>



<div class="container">
    <h2>Create Recipe</h2>


    <div class="recipeform">
    <form action="" method="POST" enctype='multipart/form-data'>

        <label for="">Recipe Title</label>
        <input type="text" value="" name="title">

        <br>
        <br>

        <label for="">Prep Time</label>
        <input type="text" value="" name="prep_time">

        <br>
        <br>

        <label for="">Cook Time</label>
        <input type="text" value="" name="cook_time">

        <br>
        <br>

        <label for="">Servings</label>
        <input type="text" value="" name="servings">

        <br>
        <br>

        <label for="">Description</label>
        <input type="text" value="" name="description">

        <br>
        <br>
        <br>

        <label for="">Image</label>
        <input type="file" value="" name="image">

        <br>
        <br>
        <br>

        <label for="">Ingredients</label>
        <input type="text" value="" name="ingredients">

        <br>
        <br>

        <label for="">Step 1</label>
        <input type="text" value="" name="step_1">

        <br>
        <br>

        <label for="">Step 2</label>
        <input type="text" value="" name="step_2">

        <br>
        <br>

        <label for="">Step 3</label>
        <input type="text" value="" name="step_3">

        <br>
        <br>

        <label for="">Step 4</label>
        <input type="text" value="" name="step_4">

        <br>
        <br>

        <label for="">Step 5</label>
        <input type="text" value="" name="step_5">

        <br>
        <br>
        
        <label for="">Step 6</label>
        <input type="text" value="" name="step_6">

        <br>


<div class="addrecipesubmit">
    <button type="submit">Add Recipe</button>
</div>
</div>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/footer.php'; ?>