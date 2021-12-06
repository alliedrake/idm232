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
              echo '<td>' . $row['title'] . '</td>';
              echo '<td><a href="view_recipe_page.php?id='  . $row['id'] . '">' . $row['description']. '</a></td>';
              echo '<td> <img width="190" src="' . $row['file_path'] . '" alt=""></td>';
              echo '</td>';
          }
        ?> 
    </tbody>
        
  </table>
        </div>