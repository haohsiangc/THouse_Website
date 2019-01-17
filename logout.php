<?php
    session_start();
    unset($_SESSION['loggedin']);
    unset($_SESSION["login_user"]);
    header("Location: index.php");
?>