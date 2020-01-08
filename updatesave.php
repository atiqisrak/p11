<?php
	$con=mysqli_connect('localhost','root','root@root','p11'); 
	mysqli_select_db($con,'p11'); 
	
	$sqlupdate="UPDATE student SET Name='$_POST[Uname]' ,Age='$_POST[Uage]' ,sex='$_POST[Usex]' ,country='$_POST[Ucountry]' WHERE ID=$_POST[Uid]";
	if (mysqli_query($con,$sqlupdate))	echo "Successfully updated";
	else echo "Failed to update";

	
	
?>