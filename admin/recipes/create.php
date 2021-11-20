<?php $page_title = "CREATE"; ?>

<?php

include '../../_global/header.php'; ?>


    <h2>Create Recipe</h2>


    <div class="recipeform">
    <form action="/create_recipe.php" method="POST">

        <label for="">Recipe Title</label>
        <input type="text" value="" name="title">

        <br>
        <br>

        <label for="">Prep Time</label>
        <input type="text" value="" name="prep_time">

        <br>
        <br>

        <label for="">Cook Time</label>
        <input type="text" value="" name="cook_time">

        <br>
        <br>

        <label for="">Servings</label>
        <input type="text" value="" name="servings">

        <br>
        <br>

        <label for="">Description</label>
        <input type="text" value="" name="description">

        <br>
        <br>

        <label for="">Image</label>
        <input type="text" value="" name="image">

        <br>
        <br>

        <label for="">Ingredients</label>
        <input type="text" value="" name="ingredients">

        <br>
        <br>

        <label for="">Step 1</label>
        <input type="text" value="" name="step_1">

        <br>
        <br>

        <label for="">Step 2</label>
        <input type="text" value="" name="step_2">

        <br>
        <br>

        <label for="">Step 3</label>
        <input type="text" value="" name="step_3">

        <br>
        <br>

        <label for="">Step 4</label>
        <input type="text" value="" name="step_4">

        <br>
        <br>

        <label for="">Step 5</label>
        <input type="text" value="" name="step_5">

        <br>
        <br>
        
        <label for="">Step 6</label>
        <input type="text" value="" name="step_6">

        <br>


<div class="addrecipesubmit">
    <button type="submit">Add Recipe</button>
</div>


    <?php include '../_global/footer.php'; ?>