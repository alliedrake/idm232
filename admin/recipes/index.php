<?php
$page_title = "Recipe";
?>

<?php include_once __DIR__ . '/../../_global/header.php';      
?>




<div class="searchheader">
            <h1>All Recipes</h1>
            <div id="alphabet"><h4>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h4></div>
        </div>

        <div class="recipesearchbar">
        
        <form class="search-form" action="" method="GET">
        <label for="search">Search</label>
        <input type="text" name="keyword" placeholder=""
            value="<?php echo @$_GET['keyword']; ?>">
        <input type="submit" value="submit">
        </form>

        </div>  

        <div class="addrecipebutton">
          <button type="submit"><a href="<?php siteUrl('/admin/recipes/create_recipe.php'); ?>">Add New Recipe</a></button>
        </div>
</div>



<?php

$query = 'SELECT recipe.id, recipe.title, recipe.description, file.file_path ';
$query .= 'FROM add_recipes AS recipe ';
$query .= 'INNER JOIN files AS file ';
$query .= 'ON recipe.file_id = file.id ';

$db_results = mysqli_query($db_connection, $query);



    // Check if the results returned anything
    if ($db_results && $db_results->num_rows > 0) {
        include __DIR__ . '/../../_components/list-recipes.php';
    } else {
        echo '<p>There are currently no recipes in the database</p>';
    }



    ?>


      

<div class="footer">
    <a href="<?php siteUrl('/home.php'); ?>"><img src="../../dist/images/foodie.png" alt="banner"></a>
</div>


  </body>
  </html>
    
