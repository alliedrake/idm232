<?php
$page_title = 'Edit User';?>

<?php require_once __DIR__  . '/../../_global/header.php';?>

<?php

if (isset($_POST['update'])) {
  $user_id = $_POST['user_id'];
  // Make sure GET ID == post ID
  if ($_GET['id'] != $user_id) {
      redirectTo('/admin/users/edit.php?id=' . $_GET['id'] . '&error=User ID does not match current user.');
  }
  //  Parse Data
  $first_name = mysqli_real_escape_string($db_connection, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db_connection, $_POST['last_name']);
  $email = mysqli_real_escape_string($db_connection, $_POST['email']);
  $role = mysqli_real_escape_string($db_connection, $_POST['role']);
  $username = mysqli_real_escape_string($db_connection, $_POST['username']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  // Build Query
  $query = 'UPDATE users ';
  $query .= 'SET ';
  $query .= "first_name = '{$first_name}', ";
  $query .= "last_name = '{$last_name}', ";
  $query .= "email = '{$email}', ";
  $query .= "username = '{$username}', ";
  $query .= "role = '{$role}' ";
  $query .= "WHERE id = {$user_id}";

  // Execute Query
  $db_results = mysqli_query($db_connection, $query);

  if ($db_results && $db_results->num_rows > 0) {
      // Success
      redirectTo('/admin/users?success=User Updated');
  } else {
      // Error
      redirectTo('/admin/users/edit.php?id=' . $user_id . '&error=' . mysqli_error($db_connection));
  }
} elseif (isset($_GET['id'])) {
  $user_id = $_GET['id'];


  // Build Query
  $query .= 'SELECT * ';
  $query .= 'FROM users ';
  $query .= 'WHERE id=' . $user_id;

  $db_results = mysqli_query($db_connection, $query);
  if ($db_results) {
      $user = $row = mysqli_fetch_assoc($db_results);
  } else {
      // Redirect user if ID does not have a match in the DB
      redirectTo('/admin/users?error=' . mysqli_error($db_connection));
  }
} else {
  // Redirect user if no ID is passed in URL
  redirectTo('/admin/users');
}
?>



<div class="container">
<h1>Edit User</h1>
<?php include __DIR__ . '/../../_components/alert.php'; ?>
<form action="" method="POST">

  <label for="">First Name</label>
  <input type="text"
    value="<?php echo $user['first_name']; ?>"
    name="first_name">

  <label for="">Last Name</label>
  <input type="text"
    value="<?php echo $user['last_name']; ?>"
    name="last_name">

  <label for="">Username</label>
  <input type="text"
    value="<?php echo $user['username']; ?>"
    name="username">

  <label for="">Email</label>
  <input type="email"
    value="<?php echo $user['email']; ?>"
    name="email">


  <label for="">Role</label>
  <select name="role" id="select">
    <option selected value="employee">Employee</option>
    <option value="admin">Admin</option>
  </select>

  <input type="hidden"
    value="<?php echo $user['id']; ?>"
    name="user_id">

  <br>
  <br>
  <input class="btn btn-primary" name="update" type="submit" value="Update" id="submitbutton">

</form>
</div>

<?php require_once __DIR__  . '/../../_global/footer.php';?>

</body>
</html>