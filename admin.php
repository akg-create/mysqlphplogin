<?php 
include("session.php"); ?>

<?php
// Disable browser/server caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 1 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
      <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
      <p>You are in the protected Admin area.</p>
      <a href="logout.php">Logout</a>
    </div>
  </body>
</html>
