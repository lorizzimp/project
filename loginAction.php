<?php
include("conn.php");
$usernameLogin = $_POST["username"];
$passwordLogin = $_POST["password"];
$stmt = $conn ->prepare("select * from employee where username = ? and password = ?") ;
$stmt ->bind_param("ss", $usernameLogin, $passwordLogin);
$stmt -> execute();
$result = $stmt ->get_result();
$row = $result->fetch_assoc();
if($row){
	$_SESSION["username"]= $row["username"];
	header("Location: index.html");
	die();
}
$conn->close();
?>