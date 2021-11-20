
<?php

require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../database.php';


  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "idm232_publichtml";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


  if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }


$user_id = "1";
$title = "Squash";
$prep_time = "20min";
$cook_time = "25min";
$servings = "two";
$description = "this is squash";
$image = "this is an image";
$ingredients="these are the ingredients";
$step_1 = "step one";
$step_2 = "step two";
$step_3 = "step three";
$step_4 = "step four";
$step_5 = "step five";
$step_6 = "step six";


  $user_id = mysqli_real_escape_string($db_connection, $user_id);
  $title = mysqli_real_escape_string($db_connection, $title);
  $prep_time = mysqli_real_escape_string($db_connection, $prep_time);
  $cook_time = mysqli_real_escape_string($db_connection, $cook_time);
  $servings = mysqli_real_escape_string($db_connection, $servings);
  $description = mysqli_real_escape_string($db_connection, $description);
  $image = mysqli_real_escape_string($db_connection, $image); 
  $ingredients = mysqli_real_escape_string($db_connection, $ingredients); 
  $step_1 = mysqli_real_escape_string($db_connection, $step_1); 
  $step_2 = mysqli_real_escape_string($db_connection, $step_2); 
  $step_3 = mysqli_real_escape_string($db_connection, $step_3); 
  $step_4 = mysqli_real_escape_string($db_connection, $step_4); 
  $step_5 = mysqli_real_escape_string($db_connection, $step_5); 
  $step_6 = mysqli_real_escape_string($db_connection, $step_6); 



  // Step 2: Preform Database Query
  $query = "INSERT INTO add_recipes (user_id, title, prep_time, cook_time, servings, description, image, ingredients, step_1, step_2, step_3, step_4, step_5, step_6)
  VALUES ('{$user_id}', '{$title}', '{$prep_time}', '{$cook_time}', '{$servings}', '{$description}', '{$image}', '{$ingredients}', '{$step_1}','{$step_2}', '{$step_3}', '{$step_4}', '{$step_5}', '{$step_6}')";
  $result = mysqli_query($db_connection, $query);




// Check there are no errors with our SQL statement
if ($result) {
    // Success
    // redirect_to("somepage.php");
    echo "Success!";
  } else {
    die ("Database query failed. " . mysqli_error($connection));
  }





// OLD CODE
//INSERT INTO `add_recipes`(`user_id`, `title`, `prep_time`, `cook_time`, `servings`, `description`, `image`, `ingredients`, `step_1`, `step_2`, `step_3`, `step_4`, `step_5`, `step_6`) 
//VALUES ('1','food','30min','40min','two','description','image','ingredients','step','step','step','step','step','step')


// $query = "INSERT INTO `add_recipes` (`user_id`, `title`, `prep_time`, `cook_time`, `servings`, `description`, `image`, `ingredients`, `step_1`, `step_2`, `step_3`, `step_4`, `step_5`, `step_6')";
// $query .= VALUES (`2`,`food`,`30min`,`40min`,`two`,`description`,`image`,`ingredients`,`step`,`step`,`step`,`step`,`step`,`step`);


//$db_connection->query($query);

// $query = "SELECT * FROM add_recipes";
//   $result = mysqli_query($db_connection, $query);

// if (!$result) {
//     die ("Database query failed.");
// }



//     // Step 3: Use Returned Data
//     echo "<pre>";
//     while ($row = mysqli_fetch_row($result)) {
//       var_dump($row);
//       echo "<hr>";
//    
//     echo "</pre>"; 

//   
//     // Step 4: Release Returned Data
//     mysqli_free_result($result);
//   

//   
//     // Step 5: Close Database Connection
//     mysqli_close($connection);

