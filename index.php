<?php 
  
$servername = "192.168.3.5"; 
$username = "sebastian"; 
$password = "Admin123!"; 
$dbName = "new_schema"; 
  
// Creating connection 
$conn = mysqli_connect($servername,  
         $username, $password, $dbName); 
  
// Checking connection 
if (!$conn) { 
  
      // If connecting fails 
    die("Connection failed: " . mysqli_connect_error()); 
} 
  
echo "Connection established successfully..."; 
  
// Close the connection   
mysqli_close($conn); 
  
?>
