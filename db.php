<?php
$servername = "phpmysqllogin.free.nf";
$username = "if0_39361996";
$password = "sDN5HzVYrr0Mec";
$dbname = "if0_39361996_db_mysqlphplogin";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { 
  die("Connection failed: " . $conn->connect_error); 
}
?>
