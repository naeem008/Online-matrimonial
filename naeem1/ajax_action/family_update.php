<?php require '../connection.php';
session_start();
$email=$_SESSION['email'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$brother=$_POST['brother'];
$sister=$_POST['sister'];
$family_value=$_POST['family_value'];
$family_affluence=$_POST['family_affluence'];
$location=$_POST['location'];
$sql="UPDATE family_details SET father_profession='$father', mother_profession='$mother', brothers='$brother', sister='$sister', family_value='$family_value',family_affluence='$family_affluence', live='$location' WHERE email='$email'";
if (mysqli_query($con,$sql)) {
	echo "family is updated successfully!";
}else{
	echo "Alas! family is not updated";
}







 ?>