<?php 
require '../connection.php';
session_start();
$email=$_SESSION['email'];
$about=$_POST['about'];
$marital_status=$_POST['marital_status'];
$diet=$_POST['diet'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$habits=$_POST['habits'];
$mother_tongue=$_POST['mother_tongue'];
$languages=$_POST['languages'];
$blood=$_POST['blood'];
$disability=$_POST['disability'];
$basic_sql="UPDATE basic_info SET about='$about', marital_status='$marital_status', diet='$diet', height='$height' WHERE email='$email'";
if (mysqli_query($con,$basic_sql)) {
	$lifestyle_sql="UPDATE lifestyle SET weight='$weight', habits='$habits', mother_tongue='$mother_tongue', language='$languages', blood='$blood', disability='$disability' WHERE email='$email'";
	if (mysqli_query($con,$lifestyle_sql)) {
		echo 'Basic info and lifestyle is updated successfully!';
	}else{
		echo "Basic info is updaed but lifestyle is not updated";
	}
}else{
	echo "Basic info & lifestyle is not updated";
}