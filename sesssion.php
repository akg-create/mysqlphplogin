<?php
session_start();

$timeout = 60; // 1 minute

// If the user has logged in previously
if (isset($_SESSION['username'])) {
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
        // Session expired due to inactivity
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
    }

    // Session is valid — update last activity timestamp
    $_SESSION['last_activity'] = time();
} else {
    // No valid session
    header("Location: index.php");
    exit();
}
?>
