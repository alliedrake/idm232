<?php


    function get_recipes()
  {

    global $db_connection;
    $query = 'SELECT recipe.id, recipe.title, recipe.description, file.file_path ';
    $query .= 'FROM add_recipes AS recipe ';
    $query .= 'INNER JOIN files AS file ';
    $query .= 'ON recipe.file_id = file.id ';
    
    $db_results = mysqli_query($db_connection, $query);

      if ($db_results && $db_results->num_rows > 0) {
          $recipes = $db_results;
      } else {
          $recipes = null;
      }

      return $recipes;
  }
  


  function search_recipe_with_keyword($keyword)
  {
      global $db_connection;
      // Learn more here https://www.w3schools.com/mysql/mysql_like.asp
      $query = 'SELECT * ';
      $query .= 'FROM add_recipes ';
      $query .= ' WHERE ';
      $query .= "title LIKE '%" . $keyword . "%'";

      $db_results = mysqli_query($db_connection, $query);

      if ($db_results && $db_results->num_rows > 0) {
          $results = $db_results;
      } else {
          $results = null;
      }
      return $results;
    }

  ?>