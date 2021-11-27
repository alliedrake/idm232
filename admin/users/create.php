<?php
$page_title = "Create";
?>

<?php require_once __DIR__  . '/../../_global/header.php';?>

<?php
// Form has been submitted
if (isset($_POST['submit'])) {

    //  Parse Data
    $first_name = mysqli_real_escape_string($db_connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db_connection, $_POST['last_name']);
    $role = mysqli_real_escape_string($db_connection, $_POST['role']);
    $email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $username = mysqli_real_escape_string($db_connection, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Build Query
    $query = 'INSERT INTO users (first_name, last_name, role, email, username, password)';
    $query .= "VALUES ('{$first_name}', '{$last_name}', '{$role}', '{$email}', '{$username}', '{$password}')";

    // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    if ($db_results && $db_results->num_rows > 0) {
        // Success
        redirectTo('/admin/users/index.php');
    } else {
        // Error
        redirectTo('/admin/users/index.php?error=' . mysqli_error($db_connection));
    }
}
?>

<div class="container">
<h1>Create User</h1>

<form action="" method="POST">

<label for="">First Name</label>
<input type="text" value="" name="first_name">
<br>
<br>
<label for="">Last Name</label>
<input type="text" value="" name="last_name">
<br>
<br>
<label for="">Username</label>
<input type="text" value="" name="username">
<br>
<br>
<label for="">Password</label>
<input type="password" value="" name="password">
<br>
<br>

<label for="">Email</label>
<input type="text" value="" name="email">
<br>
<br>
<label for="">Role</label>
<select name="role" id="select">
    <option selected value="employee">Employee</option>
    <option value="admin">Admin</option>
</select>

<br>
<br>


<input class="button" name="submit" type="submit" id="submitbutton" value="Submit">

</div>

<div class="footer">
    <a href="<?php siteUrl('/home.php'); ?>"><img src="../../dist/images/foodie.png" alt="banner"></a>
</div>


</body>
</html>

