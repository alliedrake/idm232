

<?php $page_title = "HOME"; ?>


<?php require_once __DIR__  . '/_global/header.php';?>
    
<div class="image_container">


    <!--<div class="centered"><h1>Explore Recipes</h1></div> -->
    <img src="dist/images/homeimage.png" alt="headerimage" class="header_image" style="width:100%;"> 

    <!--<a href=" <?php echo $app['url']; ?>/recipes/create.php">Create</a> -->


    </div>

    <div id="main-content-header">
    <h2>Trending</h2>
    </div>

    <div class="main_content">

        <div class="featured1">
        <a href="recipe.php"><img src="dist/images/stuffedsquash.png" alt="squash"></a>
        <a href="recipe.php"><h3>Sausage and Pear Stuffed Acorn Squash</h3></a>
        </div>
        
        <div class="featured2">
        <img src="dist/images/chickenpiccata.png" alt="chickenpiccata">
        <h3>Quick Chicken Piccata</h3>
        </div>
    </div>
    
    <div id="hr"><hr></div>

    <div class="featured">
        <h2>Featured</h2>
    
        <div class='recipes1'>

        <div class="firstfeature">
            <img src="dist/images/chickenpiccata.png">
            <h3>Chicken Picatta</h3>

        </div>

        <div class="secondfeature">
            <img src="dist/images/chickenpiccata.png">
            <h3>Chicken Picatta</h3>
        </div>

        <div class="thirdfeature">
            <img src="dist/images/chickenpiccata.png">
            <h3>Chicken Picatta</h3>
        </div>
        </div>
    </div>


    <div class="banner">
        <h2>Sign in to save and share recipes!</h2>
        <a href="/auth/login.php" class="button1">Sign In</a>
    </div>

    <div class="favorites">
        <h2>Our Favorites</h2>
    
        <div class='recipes'>

        <div class="firstrecipe">
            <img src="dist/images/chickenpiccata.png">
            <h3>Chicken Picatta</h3>

        </div>

        <div class="secondrecipe">
            <img src="dist/images/chickenpiccata.png">
            <h3>Chicken Picatta</h3>
        </div>

        <div class="thirdrecipe">
            <img src="dist/images/chickenpiccata.png">
            <h3>Chicken Picatta</h3>
        </div>

        <div class="fourthrecipe">
            <img src="dist/images/chickenpiccata.png">
            <h3>Chicken Picatta</h3>
        </div>

        <div class="fifthrecipe">
            <img src="dist/images/chickenpiccata.png">
            <h3>Chicken Picatta</h3>
        </div>

        <div class="sixthrecipe">
            <img src="dist/images/chickenpiccata.png">
            <h3>Chicken Picatta</h3>
        </div>
    </div>



<?php require_once __DIR__  . '/_global/footer.php';?>

    </body>
    </html>

    
