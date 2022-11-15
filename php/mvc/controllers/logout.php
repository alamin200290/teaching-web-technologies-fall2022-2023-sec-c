<?php 
    session_start();
    //session_destroy();
    unset($_SESSION['valid']);
    header('location: ../views/login.php');
?>