<?php
include("connect_db.php");
echo"<meta charset='UTF8'>";
$query="SELECT * FROM product";

$value=mysql_query($query)or die ("Select Error".mysql_error());
echo '<table border="1">
	<tr>
		<td>รหัสสินค้า </td>
		<td>ชื่อสินค้า </td>
		<td>ราคาสินค้า </td>
		<td>Update</td>
		<td>Delete </td>
		
	</tr>';
while($row=mysql_fetch_array($value))
{
	    echo '<tr>';
	    echo '<td>'.$row["Pro_id"].'</td>';
		echo '<td>'.$row["Pro_name"].'</td>';
		echo '<td>'.$row["Pro_price"].'</td>';
		echo '<td><input type="submit" value="Update" name="Update"></td>';
		echo '<td><input type="submit" value="Delete" name="Delete"> </td>';
	    echo '</tr>';
	
	
}
        echo '</table>';	





?>


	
