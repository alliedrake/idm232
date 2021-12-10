
<div class="recipecontainer">


<table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
      </tr>
    </thead>

    
  
    <tbody>
      
        <?php
          while ($row = mysqli_fetch_assoc($db_results)) {
              echo '<tr>';
              echo '<td>' . $row['id'] . '</td>';
              echo '<td>' . $row['title'] . '</td>';
              echo '<td><a href="view_recipe.php?id=' . $row['id'] . '">' . $row['description']. '</a></td>';
              echo '<td> <img width="100" src="' . $app['url'] .  $row['file_path'] . '" alt=""></td>';
              echo '</td>';
          }
        ?> 
    </tbody>
        
  </table>
        </div>