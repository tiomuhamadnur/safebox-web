<?php 
$servername = "accelomrtj.online";
$username = "n1658805_rfid";
$password = "umatlucu1880@";
$dbname = "n1658805_absensi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>