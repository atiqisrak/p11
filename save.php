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


//Profile Picture section

/*$propic_name=$_FILE['pp']['name'];
$propic_extension=$*/
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["pp"]["name"]);
$filename = $_FILES["pp"]["name"];
/*$upload0k = 1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));*/

if(isset($_POST["sb"])){
	if(!file_exists($target_file)){
		if (move_uploaded_file($_FILES["pp"]["tmp_name"], target_file)){
			echo "File Has been Uploaded.";
		}
	}else {
		echo "A file with this name already exists.";
	}
}

$sql="insert into student(id,name,age,sex,country,pp)values('$id','$name',$age,'$sex','$country','$filename')";
mysqli_query($con,$sql);//execute the query

?>