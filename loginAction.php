<?php
include("conn.php");
$usernameLogin = $_POST["username"];
$passwordLogin = $_POST["password"];
$stmt = $conn ->prepare("select * from employee where username = ? and password = ?") ;
$stmt ->bind_param("ss", $usernameLogin, $passwordLogin);
$stmt -> execute();
$result = $stmt ->get_result();
$rowresult = $result->fetch_assoc();
if($rowresult){
	$_SESSION["username"]= $rowresult["username"];
	header("Location: index.html");
	die();
}
$stmt ->close();
$conn->close();
?>