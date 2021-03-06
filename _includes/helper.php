<?php
/**
 * Output the full site url dynamically instead of statically
 *
 * @param string $path
 * @return string
 */


function siteUrl($path = '', $echo = true)
{
    global $app;
    $url = $app['url'];
    if ($echo = true) {
        echo $url . $path;
    }

    else {
        return $url . $path;
    }
    

}

function redirectTo($path)
{
    // header('Location:' . $path);
}

/**
 * return date and time in the correct
 * mysqi 'datetime' format
 *
 * @return string
 */
function getFormattedDateTime()
{
    return  date('Y-m-d H:i:s');
}



/**
 * determine if current page is an admin page
 *
 * @return boolean
 */
function isAdminPage()
{
    // Getting Slug
    $uri = $_SERVER['REQUEST_URI'];
    $string_to_check_for = '/admin';
    if (strpos($uri, $string_to_check_for) === false) {
        return false;
    } else {
        return true;
    }
}


function currentUser() 
{
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        return $user;
    } else {

    return;
}
}

