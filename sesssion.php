<?php
session_start();

$timeout = 60; // 1 minute

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

$_SESSION['last_activity'] = time();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
