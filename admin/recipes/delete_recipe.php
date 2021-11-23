<?php
$page_title = 'Delete Recipe';
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';

if (isset($_GET['id'])) {
    $recipe_id = $_GET['id'];
    // Build Query
    $query .= 'DELETE ';
    $query .= 'FROM add_recipes ';
    $query .= 'WHERE id=' . $recipe_id;
    // Sanity check to make sure we're only deleting a single record.
    $query . -'LIMIT 1';

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        redirectTo('/admin/recipes?success=User was deleted');
    } else {
        redirectTo('admin/recipes/view_recipe.php?id=' . $_GET['id'] . '&error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/recipes');
}
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/../_global/footer.php';