<?php $page_title = "RECIPES"; ?>

<?php require_once __DIR__  . '/_global/header.php';?>

<div class="searchheader">
            <h1>All Recipes</h1>
            <div id="alphabet"><h4>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h4></div>
        </div>

        <div class="recipesearchbar">
          <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Search</button>
        </div>

    



<?php

$query = 'SELECT recipe.id, recipe.title, recipe.description, file.file_path ';
$query .= 'FROM add_recipes AS recipe ';
$query .= 'INNER JOIN files AS file ';
$query .= 'ON recipe.file_id = file.id ';

$db_results = mysqli_query($db_connection, $query);





    // Check if the results returned anything
    if ($db_results && $db_results->num_rows > 0) {
        include __DIR__ . '/_components/all_recipes.php';
    } else {
        echo '<p>There are currently no recipes in the database</p>';
    }



    ?>















<?php require_once __DIR__  . '/_global/footer.php';?>

</body>
</html>

