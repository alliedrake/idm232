<?php
$page_title = "Search Results";
?>

<?php include_once __DIR__ . '/_global/header.php';
      include_once __DIR__ . '/_includes/recipe-functions.php';      

?>



<?php if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $recipes = search_recipe_with_keyword($keyword);
    
} else {
    // Build Query
    $recipes = get_recipes();
}

?>


<div class="searchheader">
            <h1>Search</h1>
            <div id="alphabet"><h4>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h4></div>
        </div>

        <div class="recipesearchbar">
        
        <form class="search-form" action="" method="GET">
        <input type="text" name="keyword" placeholder=""
            value="<?php echo @$_GET['keyword']; ?>">
            <button type="submit">Search</button>
        
        </form>

        </div>  

</div>



<?php




    // Check if the results returned anything
    if ($recipes) {
        include __DIR__ . '/_components/search-results.php';
    } else {
        echo '<p>There are currently no recipes in the database</p>';
    }



    ?>


      

<div class="footer">
    <a href="<?php siteUrl('/home.php'); ?>"><img src="dist/images/foodie.png" alt="banner"></a>
</div>


  </body>
  </html>