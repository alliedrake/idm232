<div class="recipe_container2">


<table id="recipelist">
    <thead>
      <tr>
        <!-- <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th> -->
      </tr>
    </thead>

    
  
    <tbody id="recipe_list">
  
        <?php
          while ($row = mysqli_fetch_assoc($db_results)) {
              echo '<tr>';
              echo '<td><h3>' . $row['title'] . '</h3></td>';
              echo '<td><a href="view_recipe_page.php?id='  . $row['id'] . '">' . $row['description']. '</a></td>';
              echo '<td> <img width="190" src="' . $app['url'] . $row['file_path'] . '" alt=""></td>';
              echo '</td>';
          }
        ?> 
    </tbody>
        
  </table>
        </div>