<?php

$con=mysqli_connect('localhost','root','root@root','p11');  //p11 is database name
echo "Student Information:"."<br>";

$sql="select * FROM student";
$res=mysqli_query($con,$sql);    //res is now have the table


echo"<b> ID &nbsp &nbsp &nbsp Name &nbsp &nbsp Age</b>" ;

while($row=mysqli_fetch_assoc($res)) //here mysqli_fetch_assoc() function calling for the table because we don't know the size of table;
{
	$p=$row["ID"]; //
	echo "<br>" .$p ;
	echo "&nbsp &nbsp &nbsp " .$row["Name"] ;
	echo "&nbsp &nbsp &nbsp  " .$row["Age"] ;

}




?>