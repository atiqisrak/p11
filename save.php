<?php

$con=mysqli_connect('localhost','root','root@root','p11');
echo "show value <br>";
$id=$_POST['sid'];
echo "<br>Id:" .$id;
$name=$_POST['sn'];
echo "<br>Name:" .$name;
$age=$_POST['sa'];
echo "<br>Age:" .$age;
$sex=$_POST['gender'];
echo "<br>Gender:" .$sex;

$country=$_POST['co'];
echo "<br>Country:" .$country;

$sql="insert into student(id,name,age,sex,country)values('$id','$name',$age,'$sex','$country')";
mysqli_query($con,$sql);//execute the query

?>