<?php
// Connect to database (replace dbname, username, password with actual credentials)
require_once "databaseconnection.php";
//niyonshuti jean pierre 2222003223 on 9th april 2024

$uname = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT *FROM user_admin WHERE username='$uname' AND password='$password'";
$result =$connection->query($sql);
if ($result->num_rows >0) {
  // echo "successfully loggedin!";
  header("Location: Dashboard.html");
      exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
