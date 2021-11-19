
<?php $page_title = "LOG IN"; ?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php'; ?>


<div id="loginheader"><h2>Sign In | Sign Up</h2></div>

        <div class='logincontainer'>

        <form action="/_includes/process_login_form.php" method="post">
        
        
          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
        
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
                
            <button type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"><span class="remember">Remember Me</span></label>
          </div>
        
          <div class="container" style="background-color:#F5F8F4">
            <button type="button" class="cancelbtn"><a href="home.html">Cancel</a></button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
    </div>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/footer.php'; ?>

