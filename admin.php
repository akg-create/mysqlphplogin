<?php 
include("session.php"); ?>

<!DOCTYPE html>
<html>
  <head><title>Admin Page</title></head>
  <body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>You are in the protected Admin area.</p>
    <a href="logout.php">Logout</a>
  </body>
</html>
