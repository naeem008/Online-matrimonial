<?php 
$con=new mysqli('localhost','root','','naeem');
if ($_POST) {
	$email=$_POST['email'];
	$name=$_POST['name'];
	$issue=$_POST['issue'];
	$comments=$_POST['comments'];
	$sql="INSERT INTO contact_us(id, email, name, issue, comments) VALUES(NULL,'$email','$name','$issue','$comments')";
	if (mysqli_query($con,$sql)) {
		echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Contact info is saved. Thanks for feedback</div>
';
		
	 }else{
	 	echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Something went wrong</div>
';
	 }
}

 ?>