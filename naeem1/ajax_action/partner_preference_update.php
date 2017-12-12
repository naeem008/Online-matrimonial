<?php require '../connection.php';
session_start();
$email=$_SESSION['email'];
$min_age=$_POST['min_age'];
$max_age=$_POST['max_age'];
$min_height=$_POST['min_height'];
$max_height=$_POST['max_height'];
$partner_marital_status=$_POST['partner_marital_status'];
$partner_religion=$_POST['partner_religion'];
$partner_profession=$_POST['partner_profession'];
$sql="UPDATE partner SET min_age='$min_age', max_age='$max_age', min_height='$min_height', max_height='$max_height', partner_marital_status='$partner_marital_status',partner_religion='$partner_religion', partner_profession='$partner_profession' WHERE email='$email'";
if (mysqli_query($con,$sql)) {
	echo "Partner preferences is updated successfully!";
}else{
	echo "Alas! Partner preference is not updated";
}







 ?>