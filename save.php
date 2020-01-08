<?php
$con=mysqli_connect('localhost:3306','root','niloy@niil','p11');
$id=$_POST['sid'];
$name=$_POST['sn'];
$age=$_POST['sa'];
$sex=$_POST['ss'];
$country=$_POST['sc'];
/*
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['sb'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];

  	// image file directory
  	$target = "images/".basename($image);

  }
  $result = mysqli_query($con, "SELECT * FROM images");


  */

echo "<b>ID</b>: ".$id."<br>";
echo "<b>Name</b>: ".$name."<br>";
echo "<b> Age:</b> ".$age."<br>";
echo "<b> Sex:</b> ".$sex."<br>";
echo "<b> Country:</b> ".$country."<br>";
//$sql="insert into student(id,name,age,sex,country,image)values('$id','$name',$age,$sex,$country,'$image')";


$sql="insert into student(id,name,age,sex,country)values('$id','$name',$age,'$sex','$country')";

mysqli_query($con,$sql);
/*
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  $result = mysqli_query($con, "SELECT * FROM images");
*/
?>