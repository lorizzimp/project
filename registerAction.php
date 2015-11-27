<?php
include("conn.php");
$username = $_POST["username"];
$password = $_POST["password"];
$name= $_POST["name"];
$lastname= $_POST["lastname"];
$DoB= $_POST["DoB"];
$position= $_POST["position"];
$part= $_POST["part"];
$tel= $_POST["tel"];
$teloftable= $_POST["teloftable"];


$stmt = $conn ->prepare("insert into employee (username,password,emp_name,emp_lastname,emp_dob,position_id,part,tel,teloftable) 
		values (?,?,?,?,?,?,?,?,?)");
$stmt ->bind_param("sssssisss", $username, $password,$name,$lastname,$DoB,$position,$part,$tel,$teloftable);
$stmt -> execute();
$row = $stmt ->affected_rows;
if($row){
	echo "Insert Success And Edit:".$row;
}
$conn ->close();
?>