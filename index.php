<?php

session_start();
//var_dump($_SESSION); desde phpStorm
if (isset($_SESSION['dbUser'])) {
    require_once './forms/index.php';
} else {
    require_once './forms/Login.html';
}
