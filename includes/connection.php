<?php
$servername = "localhost";
$username = "root";
$password = "";
$databse_name="lending_tbl";
// Create connection
$conn = new mysqli($servername, $username, $password, $databse_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>