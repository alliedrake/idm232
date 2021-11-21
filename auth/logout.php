<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';

session_destroy();
redirectTo('/');
