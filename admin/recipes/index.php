<?php
$page_title = "Recipe";
?>

<?php include_once __DIR__ . '/../../_global/header.php'; ?>



<div class="searchheader">
            <h1>All Recipes</h1>
            <div id="alphabet"><h4>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h4></div>
        </div>

        <div class="recipesearchbar">
          <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Search</button>
        </div>

        <div class="addrecipebutton">
          <button type="submit"><a href="/admin/recipes/create_recipe.php">Add New Recipe</a></button>
        </div>



<?php

$query = 'SELECT * ';
$query .= 'FROM add_recipes';
$db_results = mysqli_query($db_connection, $query);


    // Check if the results returned anything
    if ($db_results && $db_results->num_rows > 0) {
        include $_SERVER['DOCUMENT_ROOT'] . '/_components/list-recipes.php';
    } else {
        echo '<p>There are currently no recipes in the database</p>';
    }
    ?>


        
        <!-- <div class="containerlist">
             
              
          <hr>

            <div class="allrecipecontainer">
                <div class="allrecipe1">
                  <div class="descriptions">
                  <h3>Banana Bread</h3>
                    <h4>Total Time: 1 hr 30 min | Servings: 2</h4>
                  </div>
                    <img src="../../dist/images/chickenpiccata.png">
                    <div class="editdelete">
                      <img src="../../dist/images/edit.png" alt="edit">
                      <img src="../../dist/images/delete.png" alt="delete">
                    </div>
                </div>
            </div>
            <hr>


            <div class="allrecipecontainer">
              <div class="allrecipe2">
                <div class="descriptions">
                <h3>Banana Bread</h3>
                  <h4>Total Time: 1 hr 30 min | Servings: 2</h4>
                </div>
                  <img src="../../dist/images/chickenpiccata.png">
                  <div class="editdelete">
                    <img src="../../dist/images/edit.png" alt="edit">
                    <img src="../../dist/images/delete.png" alt="delete">
                  </div>
              </div>
          </div>
          <hr>


          <div class="allrecipecontainer">
            <div class="allrecipe3">
              <div class="descriptions">
              <h3>Banana Bread</h3>
                <h4>Total Time: 1 hr 30 min | Servings: 2</h4>
              </div>
                <img src="../../dist/images/chickenpiccata.png">
                <div class="editdelete">
                  <img src="../../dist/images/edit.png" alt="edit">
                  <img src="../../dist/images/delete.png" alt="delete">
                </div>
            </div>
        </div>
        <hr>


        <div class="allrecipecontainer">
          <div class="allrecipe4">
            <div class="descriptions">
            <h3>Banana Bread</h3>
              <h4>Total Time: 1 hr 30 min | Servings: 2</h4>
            </div>
              <img src="../../dist/images/chickenpiccata.png">
          <div class="editdelete">
            <img src="../../dist/images/edit.png" alt="edit">
            <img src="../../dist/images/delete.png" alt="delete">
          </div>
          </div>
      </div>
        </div> -->


        <?php require_once __DIR__  . '/../../_global/footer.php';?>

  </body>
  </html>
    
