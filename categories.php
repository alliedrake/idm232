
<?php $page_title = "CATEGORIES"; ?>

<?php
require_once __DIR__  . '/_global/header.php';?>




<div class="categoryheader">
            <h1>Categories</h1>
            <div id="resultsheader"><h4>6 results for <b>Vegetables</b></h4></div>
        </div>

        <div class="categorydiv">

        <div class="filtercontainer">
            <h3>Filter By</h3>

            <div class="customizations">
            <form action="/action_page.php">
                <label for="meal">Meal</label>
                <select name="meal" id="meal">
                  <option value="breakfast">Breakfast</option>
                  <option value="lunch">Lunch</option>
                  <option value="dinner">Dinner</option>
                  <option value="dessert">Dessert</option>
                  <option value="snacks">Snacks</option>
                </select>
                <br><br>
              </form>

              <form action="/action_page.php">
                <label for="ingredient">Ingredient</label>
                <select name="ingredient" id="ingredient">
                  <option value="protein">Protein</option>
                  <option value="fruit">Fruit</option>
                  <option value="vegetables">Vegetables</option>
                  <option value="dairy">Dairy</option>
                  <option value="breads">Breads</option>
                </select>
                <br><br>
              </form>
            </div>


              <div id="filterbuttons">
              <input type="submit" value="Submit" id="submit">
              <input type="submit" value="Clear All" id="submit2">
            </div>
            </div>
              
            <div class="catresultcontainer">
              

                <div class="result4">
                  <div class="descript">
                  <a href="<?php siteUrl('/view_recipe_page.php?id=65')?>"><h3>Smoked Gouda & Mushroom Flatbread with Endive & Apple Salad</h3></a>
                    <h4>Total Time: 35 minutes | Servings: 5</h4>
                  </div>
                    <img src="dist/images/smoked-gouda.png">
                </div>
                <hr>
          
        
                <div class="result2">
                  <div class="descript">
                  <a href="<?php siteUrl('/view_recipe_page.php?id=35')?>"><h3>Broccoli & Basil Pesto Sandwiches with Romaine & Citrus Salad</h3></a>
                    <h4>Total Time: 25 minutes | Servings: 5</h4>
                  </div>
                    <img src="dist/images/broccoli_basil_pesto_sandwiches.jpg">
                </div>
                <hr>
          
          

                <!-- <div class="result3">
                  <div class="descript">
                  <a href="<?php siteUrl('/view_recipe_page.php?id=37')?>"><h3>Bucatini Alfredo with Broccoli</h3></a>
                    <h4>Total Time: 30 minutes | Servings: 5</h4>
                  </div>
                    <img src="dist/images/alfredo.jpg">
                </div>
                <hr> -->


                <div class="result4">
                  <div class="descript">
                  <a href="<?php siteUrl('/view_recipe_page.php?id=36')?>"><h3>Broccoli & Mozzarella Calzones with Caesar Salad</h3></a>
                    <h4>Total Time: 40 minutes | Servings: 4</h4>
                  </div>
                    <img src="dist/images/broccoli_calzones.jpg">
                </div>
                <hr>

                <div class="result4">
                  <div class="descript">
                  <a href="<?php siteUrl('/view_recipe_page.php?id=38')?>"><h3>Bucatini & Tomato Sauce with Roasted Broccoli</h3></a>
                    <h4>Total Time: 30 minutes | Servings: 2</h4>
                  </div>
                    <img src="dist/images/bucatini_tomato_sauce.jpg">
                </div>
                <hr>

                <div class="result4">
                  <div class="descript">
                  <a href="<?php siteUrl('/view_recipe_page.php?id=39')?>"><h3>Cheesy Enchiladas Rojas with Mushrooms & Kale</h3></a>
                    <h4>Total Time: 25 minutes | Servings: 4</h4>
                  </div>
                    <img src="dist/images/enchiladas.jpg">
                </div>
                <hr>

                <div class="result4">
                  <div class="descript">
                  <a href="<?php siteUrl('/view_recipe_page.php?id=47')?>"><h3>Mushroom & Potato Tacos with Romaine & Orange Salad</h3></a>
                    <h4>Total Time: 20 minutes | Servings: 4</h4>
                  </div>
                    <img src="dist/images/mushroom_potato_tacos.jpg">
                </div>
                <hr>
          
              

          </div>
          </div>

    
  
          <?php require_once __DIR__  . '/_global/footer.php';?>
</body>
</html>
          