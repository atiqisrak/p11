<?php

	$con=mysqli_connect('localhost','root','root@root','p11');  //p11 is database name
	echo "Student Information:"."<br>";
	mysqli_select_db($con,'p11');
	$sql="select * FROM student";
	$res=mysqli_query($con,$sql);    //res is now have the table

?>



<html>
<body>
<table border="1" >
<tr>
	<th> StudentID </th>
	<th> Name </th>
	<th> Age </th>
	<th> Gender </th>
	<th> Country </th>
	<th> Action </th>
</tr>
	



<?php
	
	while($row=mysqli_fetch_assoc($res)) //here mysqli_fetch_assoc() function calling for the table because we don't know the size of table;
	{
?>
<tr><form action="updatesave.php" method="post">

	<td> <input type="text" name="Uid" value="<?php echo $row["id"]; ?>"></td>
	<td> <input type="text" name="Uname" value=" <?php echo $row["name"]; ?>"></td>
	<td> <input type="text" name="Uage" value="<?php echo $row["age"]; ?>"></td>
	<td> <input type="text" name="Usex" value="<?php echo $row["sex"]; ?>"></td>
	<td> <input type="text" name="Ucountry" value="<?php echo $row["country"]; ?>"></td>
	<td><input type="submit" value="Update"> </td>
	</form>
	</tr>
<?php

	}

?>
</table>
</body>
</html>

 
