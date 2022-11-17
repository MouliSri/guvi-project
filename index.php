<?php

session_start();

if (!isset($_SESSION['userlogin'])) {
    header("Location: login.php");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header("Location: login.php");
}

?>

<p>Welcome to index</p>
<img src="assets/happ-man.jpg" alt="profile">
<a href="index.php?logout=true">Logout</a>