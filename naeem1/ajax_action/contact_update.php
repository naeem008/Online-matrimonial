<?php require '../connection.php';
session_start();
$email=$_SESSION['email'];
$contact_name=$_POST['contact_name'];
$contact_number=$_POST['contact_number'];
$relation=$_POST['relation'];
$contact_time=$_POST['contact_time'];
$sql="UPDATE contact_info SET contact_name='$contact_name', contact_number='$contact_number', relation='$relation', contact_time='$contact_time' WHERE email='$email'";
if (mysqli_query($con,$sql)) {
	echo "Contact info is updated successfully!";
}else{
	echo "Alas! Contact info is not updated";
}







 ?>