<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['passworde']);
    header("Location: login.php");
?>