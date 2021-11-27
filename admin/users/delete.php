<?php
$page_title = 'Delete User';?>

<?php require_once __DIR__  . '/../../_global/header.php';?>

<?php 
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    // Build Query
    $query .= 'DELETE ';
    $query .= 'FROM users ';
    $query .= 'WHERE id=' . $user_id;
    // Sanity check to make sure we're only deleting a single record.
    $query . -'LIMIT 1';

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        redirectTo('/admin/users?success=User was deleted');
    } else {
        redirectTo('/admin/users/view.php?id=' . $_GET['id'] . '&error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/users');
}
?>

<div class="footer">
    <a href="<?php siteUrl('/home.php'); ?>"><img src="../../dist/images/foodie.png" alt="banner"></a>
</div>


</body>
</html>
