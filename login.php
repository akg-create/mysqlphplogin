<?
session_start();
include("db.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = md5($_POST['password']); 

  $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
  $stmt->bind_param("ss", $username, $password); 

  $result = $stmt->get_result(); 
  if ($result->num_rows == 1) {
    $_SESSION['username'] = $username; 
    $_SESSION['last_activity'] = time(); 
    header("Loaction: admin.php");
    exit();
  }else { 
    header("Location: error.php");
    exity(); 
  }
}
?>

<!DOCTYPE html> 
<html>
  <head><title>Login</title></head>
  <body>
    <form method="post" action="login.php">
      <h2>Login</h2>
      Username: <input type="text" name="username" required><br>
      Password: <input type="text" name="password" required><br>\
      <input type="sumbit" value="Login">
    </form>
  </body>
</html>
