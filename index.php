<?php
session_start();
include("db.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = md5($_POST['password']); 

  $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
  $stmt->bind_param("ss", $username, $password); 

  $stmt->execute();
  $result = $stmt->get_result(); 
  
  if ($result->num_rows == 1) {
    $_SESSION['username'] = $username; 
    $_SESSION['last_activity'] = time(); 
    header("Location: admin.php"); 
    exit();
  } else { 
    header("Location: error.php");
    exit(); 
  }
}
?>

<!DOCTYPE html> 
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
      <form method="post" action="index.php">
        <h2>Login</h2>
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login"> 
      </form>
    </div>
  </body>
</html>
