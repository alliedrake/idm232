<?php 

function search_recipe_with_keyword($keyword)
  {
      global $db_connection;
      // Learn more here https://www.w3schools.com/mysql/mysql_like.asp
      $query = 'SELECT * ';
      $query .= 'FROM add_recipes ';
      $query .= ' WHERE ';
    //   $query .= "title LIKE '%" . $keyword . "%'";
    //   $query .= "OR last_name LIKE '%" . $keyword . "%' ";
    //   $query .= "OR email LIKE '%" . $keyword . "%' ";
    //   $query .= "OR phone LIKE '%" . $keyword . "%'";

      $db_results = mysqli_query($db_connection, $query);
      if ($db_results && $db_results->num_rows > 0) {
          $db_results = $db_results;
      } else {
          $db_results = null;
      }
      return $db_results;
  }
?>


    