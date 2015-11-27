
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "mrta";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    		<tr>
    		<th>Name</th>
    		<th>Lastname</th>
    		</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        		<td>".$row["emp_name"]."</td>
        		<td>".$row["emp_lastname"]."</td>
        	  </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
