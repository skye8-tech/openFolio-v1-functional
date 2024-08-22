<?php
$session_start();
include "index.php";


function authentication()
{
    if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {

        $message = 'Please login to access this page!';

        header('Location:login.php?' . $message);
    }
}

authentication();
