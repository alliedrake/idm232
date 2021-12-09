
<?php $page_title = "LOG IN"; ?>

  <?php require_once __DIR__  . '/../_global/header.php';?>

  <?php

if (isset($_POST['submit'])) {


    // check if the username and password is valid

    $email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $password = mysqli_real_escape_string($db_connection, $_POST['password']);

  
    // Build Query
    $query = 'SELECT * ';
    $query .= 'FROM users ';
    $query .= "WHERE email=' {$email}'";

    $db_results = mysqli_query($db_connection, $query);

    if ($db_results && $db_results->num_rows > 0) {
        // Get row from results and assign to $user variable;
        $user = mysqli_fetch_assoc($db_results);

        // Verify that the submitted password matches the password from the users db

        if (password_verify($password, $user['password'])) {

            // email + password exist
            // Create a user array in the SESSION variable and assign values to it
            

            $_SESSION['user'] = [
                'id' => $user['id'],
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'role' => $user['role'],
            ];

            redirectTo('/admin/index.php');

        } else {
            
          // Correct email but wrong password
            redirectTo('/auth/login.php?error=Email or Password does not exist.');
        }

    } else {
        // Wrong Email + Password
        redirectTo('/auth/login.php?error=Email or Password does not exist.');
    }

}


?>


<div class="logincontainer">
  <div class="container">


  <h1>Login</h1>
  <?php include __DIR__ . '/../_components/alert.php'; ?>


  <form action="" method="post">
    <label for="emailField">Email</label>
    <input type="email" name="email" id="emailField" value="" required>

    <label for="passwordField">Password</label>
    <input type="password" name="password" id="passwordField" value="" >

    <label for="rememberMeField">Remember Me</label>
    <input type="checkbox" name="remember_me" id="rememberMeField">
    <br>
    <br>
    <input type="submit" value="Submit" name="submit" id="submitbutton">
  </form>
</div>
</div>


<div class="footer">
    <a href="<?php siteUrl('/home.php'); ?>"><img src="../dist/images/foodie.png" alt="banner"></a>
</div>


</body>
</html>