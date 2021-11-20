
<?php

session_start();


require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../_includes/database.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="dist/styles/index.css">
        <link rel="stylesheet" href="../../dist/styles/index.css">
        <link rel="stylesheet" href="/../../../dist/styles/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title><?php echo $page_title; ?>  | IDM 232</title>
    </head>

    <body> 

        <header>

            <div class="topnav">
                <a class="active" href="home.php">Home</a>
                <a href="categories.php">Categories</a>
                <a href="../auth/login.php">Log In</a>
                <div class="search-container">
                  <form action="search.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Search</button>
                  </form>
                </div>
              </div> 
        </header>

        <?php // main content starts here ?>