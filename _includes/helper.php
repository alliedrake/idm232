<?php

/** Snippet to redirect to a page (Week 4) 

* @param string $url

* @return void

*/

function redirectTo($url) {
    header('Location: ' . $url);
}



?>