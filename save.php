<?php
$con=mysqli_connect('localhost','root','root','p11');
$id=$_POST['sid'];
$name=$_POST['sn'];
$age=$_POST['sa'];
echo "<b>ID</b>: ".$id."<br>";
echo "<b>Name</b>: ".$name."<br>";
echo "<b> Age:</b> ".$age."<br>";
$sql="insert into student(id,name,age)values('$id','$name',$age)";
mysqli_query($con,$sql);
?>