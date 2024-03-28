<?php
function OpenCon()
{
$dbhost = "192.168.3.5";
$dbuser = "root";
$dbpass = "Admin123!";
$db = "example";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);
return $conn;
}
function CloseCon($conn)
{
$conn -> close();
}
?>
