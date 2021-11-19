<?php

include 'helper.php';

 echo '<pre>';
 var_dump($_POST);
 echo '</pre>';

 if (empty($_POST) && isset($_POST)) {
    //Redirect if post is empty
    redirectTo('/login.php');
 }

$emailField = isset($_POST['email']);
$passwordField = isset($_POST['password']);
//$rememberField = isset($_POST['remember_me']);

//Make sure required fields have values
if (empty($emailField) || empty($passwordField) ) {
    redirectTo('/login.php?errorMessage=Email or Password is Empty');
}

?>