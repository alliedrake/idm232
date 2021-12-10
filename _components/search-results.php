
<div class="recipecontainer">


<table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
      </tr>
    </thead>

    
  
    <tbody>
      
        <?php
          while ($row = mysqli_fetch_assoc($recipes)) {
              echo '<tr>';
              echo '<td>' . $row['title'] . '</td>';
              echo '<td><a href="view_recipe_page.php?id=' . $row['id'] . '">' . $row['description']. '</a></td>';
            //   echo '<td> <img width="100" src="' . $app['url'] .  $row['file_path'] . '" alt=""></td>';
              echo '</td>';
          }
        ?> 
    </tbody>
        
  </table>
        </div>