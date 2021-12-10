

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
        <a href="<?php siteUrl('/view_recipe_page.php?id=65')?>"><img src="dist/images/smoked-gouda.png"></a>
        <a href="<?php siteUrl('/view_recipe_page.php?id=65')?>"><h3>Smoked Gouda & Mushroom Flatbread with Endive & Apple Salad</h3></a>
        </div>
    
        
        <div class="featured2">
        <a href="<?php siteUrl('/view_recipe_page.php?id=38')?>"><img src="dist/images/bucatini_tomato_sauce.jpg"></a>
        <a href="<?php siteUrl('/view_recipe_page.php?id=38')?>"><h3>Bucatini & Tomato Sauce with Roasted Broccoli</h3></a>
        </div>
    </div>
    
    <div id="hr"><hr></div>

    <div class="featured">
        <h2>Featured</h2>
    
        <div class='recipes1'>

        <div class="firstfeature">
        <a href="<?php siteUrl('/view_recipe_page.php?id=33')?>"><img src="dist/images/chicken_rice_roasted_carrots.jpg"></a>
        <a href="<?php siteUrl('/view_recipe_page.php?id=33')?>"><h3>Ancho Orange Chicken with Kale Rice and Roasted Carrots</h3></a>

        </div>

        <div class="secondfeature">
        <a href="<?php siteUrl('/view_recipe_page.php?id=41')?>"><img src="dist/images/general_tsos.jpg"></a>
        <a href="<?php siteUrl('/view_recipe_page.php?id=41')?>"><h3>General Tso's Chicken with Bok Choy & Jasmine Rice</h3></a>
        </div>

        <div class="thirdfeature">
        <a href="<?php siteUrl('/view_recipe_page.php?id=49')?>"><img src="dist/images/pork_chorizo_tacos.png"></a>
        <a href="<?php siteUrl('/view_recipe_page.php?id=49')?>"><h3>Pork Chorizo Tacos with Cheesy Roasted Potatoes</h3></a>
        </div>
        </div>
    </div>


    <div class="banner">
        <h2>Sign in to save and share recipes!</h2>
        <a href="<?php siteUrl('/auth/login.php')?>"class="button1">Sign In</a>
    </div>

    <div class="favorites">
        <h2>Our Favorites</h2>
    
        <div class='recipes'>

        <div class="firstrecipe">
        <a href="<?php siteUrl('/view_recipe_page.php?id=49')?>"><img src="dist/images/pork_chorizo_tacos.png"></a>
        <a href="<?php siteUrl('/view_recipe_page.php?id=49')?>"><h3>Pork Chorizo Tacos with Cheesy Roasted Potatoes</h3></a>

        </div>

        <div class="secondrecipe">
        <a href="<?php siteUrl('/view_recipe_page.php?id=38')?>"><img src="dist/images/enchiladas.jpg"></a>
        <a href="<?php siteUrl('/view_recipe_page.php?id=38')?>"><h3>Cheesy Enchiladas Rojas with Mushrooms & Kale</h3></a>
        </div>

        <div class="thirdrecipe">
        <a href="<?php siteUrl('/view_recipe_page.php?id=69')?>"><img src="dist/images/thai-chicken-curry.png"></a>
        <a href="<?php siteUrl('/view_recipe_page.php?id=69')?>"><h3>Thai Curry Chicken with Carrots & Bok Choy</h3></a>
        </div>

        <div class="fourthrecipe">
        <a href="<?php siteUrl('/view_recipe_page.php?id=64')?>"><img src="dist/images/rigata-pasta.png"></a>
        <a href="<?php siteUrl('/view_recipe_page.php?id=64')?>"><h3>Shrimp Fra Diavolo with Lumaca Rigata Pasta</h3></a>
        </div>
    </div>



<?php require_once __DIR__  . '/_global/footer.php';?>

    </body>
    </html>

    
