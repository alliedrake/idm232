<?php
$page_title = "Admin";
?>


<?php require_once __DIR__  . '/../../_global/header.php';?>

<?php

// Build Query
$query = 'SELECT * ';
$query .= 'FROM users';
$db_results = mysqli_query($db_connection, $query);
?>


<div class="container">
    <div id="staff"><h1>Staff</h1></div>
    <a class="button" href="create.php">Create New User</a>
    <?php include __DIR__ . '/../../_components/alert.php'; ?>


    <div class = "table_container">

    <?php
    // Check if the results returned anything
    if ($db_results && $db_results->num_rows > 0) {
        include __DIR__ . '/../../_components/list-users.php';
    } else {
        echo '<p>There are currently no users in the database</p>';
    }
    ?>
</div>
</div>

<div class="footer">
    <a href="<?php siteUrl('/home.php'); ?>"><img src="../../dist/images/foodie.png" alt="banner"></a>
</div>


</body>
</html>


