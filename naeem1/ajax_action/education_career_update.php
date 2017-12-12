<?php 
require '../connection.php';
session_start();
$email=$_SESSION['email'];
$undergraduate=$_POST['undergraduate'];
$postgraduate=$_POST['postgraduate'];
$university=$_POST['university'];
$college=$_POST['college'];
$profession=$_POST['profession'];
$company=$_POST['company'];
$designation=$_POST['designation'];
$salary=$_POST['salary'];

$basic_sql="UPDATE educational_details SET undergraduate='$undergraduate', postgraduate='$postgraduate', university='$university', college='$college', profession='$profession', company='$company', designation='$designation', salary='$salary' WHERE email='$email'";
if (mysqli_query($con,$basic_sql)) {
	echo 'Education and career is updated is updated successfully!';
}else{
	echo "Education and career is not updated";
}