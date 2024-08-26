<?php 
session_start();
if(isset($_GET['logout'])) {
    session_destroy($_SESSION['login']);    
}
header("Location: login.php?"); 
?>
 