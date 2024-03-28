<?php
$servername = "192.168.5.10";
$username = "sebastian";
$password = "Admin123!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
