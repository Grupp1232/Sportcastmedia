<?php 
  
$servername = "192.168.3.5"; 
$username = "root"; 
$password = "Admin123!"; 
$dbName = "geeksDatabase"; 
  
try { 
  
    // Creating the connection 
    $conn = new PDO("mysql:host=$servername;dbname=$dbName",  
                    $username, $password); 
    
    // Setting the PDO error mode to exception 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    echo "Connection established successfully..."; 
    
    // To close the connection 
    $conn = null; 
}  
  
// If connection fails  
catch(PDOException $e) { 
  
      // Throws the error message  
    echo "Connection failed: " . $e->getMessage(); 
} 
  
?>
