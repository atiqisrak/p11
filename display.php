<?php

	$con=mysqli_connect('localhost','root','root@root','p11');  //p11 is database name
	echo "Student Information:"."<br>";
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
	<th> ProPic </th>
	<th> Action </th>
</tr>
	



<?php
	
	while($row=mysqli_fetch_assoc($res)) //here mysqli_fetch_assoc() function calling for the table because we don't know the size of table;
	{
?>
<tr>

	<td> <?php echo $row["ID"]; ?></td>
	<td> <?php echo $row["Name"]; ?></td>
	<td> <?php echo $row["Age"]; ?></td>
	<td> <img src="uploads/"<?php echo $row["pp"]; ?>alt="ProPic"></td>
	
	<td><a href="update.php">Update</a> </td>
</tr>
<?php

	}

?>
</table>
</body>
</html>

<br><button onclick="myFunction()">Print</button>
<script>
function myFunction() {
  window.print();
}



window.print();  


<input type="submit"  class="button" onClick="window.print();" id="btnPrint"  name="check" value="Confirm">

</script>