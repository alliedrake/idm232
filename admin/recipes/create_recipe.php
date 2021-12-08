<?php $page_title = 'CREATE'; ?>


<?php require_once __DIR__  . '/../../_global/header.php';?>
<?php require_once __DIR__  . '/../../_includes/functions.php';?>

<?php
//Upload Image 

if (isset($_POST['submit'])) {
    // Parse Data
    

    
    $files_array = explode('.', $_FILES['image']['name']);
    $file_title = slugify($files_array[0]);
    $extension = $files_array[1];
    $final_file_name = $file_title . '.' . $extension;


    // echo '<pre>';
    // var_dump($file_title);
    // var_dump($extension);
    // echo '<pre>';
    // die;


    $temp_name = $_FILES['image']['tmp_name'];

    // dist/uploads/image-name.png
    $file_path = $app['asset_url'] . $final_file_name;

    // idm232/public_html/ + dist/uploads/image-name.png
    $file_destination =  __DIR__ . "/../.." . $file_path;

    // echo '<pre>';
    // var_dump($file_destination);
    // echo '<pre>';
    // die;


//     // Build Query
    $query = 'INSERT INTO files (file_path, final_file_name) ';
    $query .= "VALUES ('{$file_path}', '{$final_file_name}')";
  
   
    

//     // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    $new_uploaded_file_id = null;
    
    
    if ($db_results) {
        // file was inserted into the db
        
        if (move_uploaded_file($temp_name, $file_destination)) {
            // File was uploaded successfully
            

            // Build Query to get the recently uploaded image and get that ID
            $query = 'SELECT * ';
            $query .= 'FROM files ';
            $query .= "WHERE file_path='{$file_path}'";
  
            $db_results = mysqli_query($db_connection, $query);
            if ($db_results) {
                // Get row from results and assign to $user variable;
                $new_uploaded_file_id = mysqli_fetch_assoc($db_results)['id'];
            } else {
                redirectTo('/admin/recipes/create.php?error=Could not find image in database');
            }
        } else {
            redirectTo('/admin/recipes/create.php?error=Error moving file');
        }
    } else {
        // Error
        redirectTo('/admin/recipes/create.php?error=' . mysqli_error($db_connection));
    }

}
?>

<?php


if (isset($_POST['submit'])) {

//  Submit rest of the form
$title = mysqli_real_escape_string($db_connection, $_POST['title']);
$prep_time = mysqli_real_escape_string($db_connection, $_POST['prep_time']);
$cook_time = mysqli_real_escape_string($db_connection, $_POST['cook_time']);
$servings = mysqli_real_escape_string($db_connection, $_POST['servings']);
$description = mysqli_real_escape_string($db_connection, $_POST['description']);
$ingredients = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
$step_1 = mysqli_real_escape_string($db_connection, $_POST['step_1']);
$step_2 = mysqli_real_escape_string($db_connection, $_POST['step_2']);
$step_3 = mysqli_real_escape_string($db_connection, $_POST['step_3']);
$step_4 = mysqli_real_escape_string($db_connection, $_POST['step_4']);
$step_5 = mysqli_real_escape_string($db_connection, $_POST['step_5']);
$step_6 = mysqli_real_escape_string($db_connection, $_POST['step_6']);
$file_id = (float)$new_uploaded_file_id;

//Build Query
$query = 'INSERT INTO add_recipes (title, prep_time, cook_time, servings, description, ingredients, step_1, step_2, step_3, step_4, step_5, step_6, file_id)';
$query .= "VALUES ('{$title}', '{$prep_time}', '{$cook_time}', '{$servings}', '{$description}', '{$ingredients}', '{$step_1}','{$step_2}','{$step_3}', '{$step_4}', '{$step_5}','{$step_6}','{$file_id}')";




$db_results = mysqli_query($db_connection, $query);


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


        <input class="button" name="submit" type="submit" id="submitbutton" value="Submit">
</div>

<div class="footer">
    <a href="<?php siteUrl('/home.php'); ?>"><img src="../../dist/images/foodie.png" alt="banner"></a>
</div>


</body>
</html>