<?php
$page_title = 'Edit User';?>

<?php require_once __DIR__  . '/../../_global/header.php';?>

<?php
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Build Query
    $query .= 'SELECT * ';
    $query .= 'FROM users ';
    $query .= 'WHERE id=' . $user_id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results && $db_results->num_rows > 0) {
        // Get row from results and assign to $user variable;
        $user = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/users?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/users');
}
?>
<div class="viewcontainer">
    <h1><?php echo $user['first_name'] . ' ' . $user['last_name']; ; ?>
    </h1>
    <p>Username: <?php echo $user['username']; ?>
    </p>
    <p>Email: <?php echo $user['email']; ?>
    
    <div class='view'>
    <p><a class="editbutton" href="/admin/users/edit.php?id=<?php echo $user['id']; ?>">Edit</a>

        <a class="deletebutton" href="/admin/users/delete.php?id=<?php echo $user['id']; ?>">Delete</a>
    </p>
</div>
</div>


<?php require_once __DIR__  . '/../../_global/footer.php';?>

</body>
</html>
