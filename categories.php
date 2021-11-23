
<?php $page_title = "CATEGORIES"; ?>

<?php
require_once __DIR__  . '/_global/header.php';?>


<div class="categoryheader">
            <h1>Categories</h1>
            <div id="resultsheader"><h4>4 results for <b>Dessert</b></h4></div>
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
                <div class="result1">
                  <div class="descript">
                  <h3>Banana Bread</h3>
                    <h4>Total Time: 1 hr 30 min | Servings: 2</h4>
                  </div>
                    <img src="dist/images/chickenpiccata.png">
                </div>
                <hr>

        
                <div class="result2">
                  <div class="descript">
                  <h3>Banana Bread</h3>
                    <h4>Total Time: 1 hr 30 min | Servings: 2</h4>
                  </div>
                    <img src="dist/images/chickenpiccata.png">
                </div>
                <hr>
          

              <div class="result3">
                <div class="descript">
                <h3>Banana Bread</h3>
                  <h4>Total Time: 1 hr 30 min | Servings: 2</h4>
                </div>
                  <img src="dist/images/chickenpiccata.png">
              </div>
              <hr>
          

            <div class="result4">
              <div class="descript">
              <h3>Banana Bread</h3>
                <h4>Total Time: 1 hr 30 min | Servings: 2</h4>
              </div>
                <img src="dist/images/chickenpiccata.png">
            </div>
            <hr>

          </div>
          </div>

    
  
          <?php require_once __DIR__  . '/_global/footer.php';?>
</body>
</html>
          