<?php
	$host="localhost";//ชื่อโฮลต์
	$username="root";//ชื่อผู้ใช้ฐานข้อมูล
	$password="1234";//รหัสผ่านในการเข้าฐานข้อมูล
	$db="mrta";//ชื่อฐานข้อมูล

	//คำสั่ง sql ในการเชื่อมต่อฐานข้อมูล
	mysql_connect($host,$username,$password,$db)or die("connect error");
	
	//คำสั่ง sql ในการเซตรูปแบบตัวอักษร ที่จะใช้ร่วมกันระหว่าง client และ server
	mysql_query("SET NAMES UTF8");	
	
	//คำสั่ง sql ในการเลือกฐานข้อมูล
	mysql_select_db($db)or die("select error");
?>