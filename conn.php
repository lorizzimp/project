
<?php
$servername = "localhost";
$usermysql = "root";
$passmysql = "1234";
$dbname = "mrta";

// Create connection
$conn = new mysqli($servername, $usermysql, $passmysql, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
