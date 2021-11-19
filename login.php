
<?php $page_title = "LOG IN"; ?>

<?php
//echo '<pre>';
 // var_dump($_POST);
 // echo '</pre>';
?>


<?php include '_global/header.php'; ?>


<div id="loginheader"><h2>Sign In</h2></div>

<?php
          if (isset($_GET['errorMessage']) ) {
            echo '<p class="error">'.$_GET['errorMessage']. '</p>';
          }
        ?>

        <div class='logincontainer'>


        <br>

        <form action="/_includes/process_login_form.php" method="post">
        
          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
        
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" >

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" id="email" required>
                
            <button type="submit">Login</button>
          </div>
        
        
        </form>
    </div>

    <?php include '_global/footer.php'; ?>


