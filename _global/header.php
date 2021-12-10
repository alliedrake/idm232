<?php 




require_once __DIR__  . '/../config.php';
require_once __DIR__  . '/../_includes/database.php';
require_once __DIR__ . '/../_includes/helper.php';

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo $app['url'] . '/dist/styles/index.css';?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title><?php echo $page_title; ?>  | IDM 232</title>
    </head>

    <body> 

        <header>

            <div class="topnav">
                <a href="<?php siteUrl('/home.php'); ?>">Home</a>
                <a href="<?php siteUrl('/recipes_page.php'); ?>">All Recipes</a>
                <a href="<?php siteUrl('/auth/login.php'); ?>">Log In</a>
                <a href="<?php siteUrl('/categories.php'); ?>">Categories</a>
                <div class="search-container">
                <a href="<?php siteUrl('/search.php'); ?>">Search</a>
                </div>
              </div> 

            
              </div>
        </header>



      