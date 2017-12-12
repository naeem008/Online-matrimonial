<?php require '../connection.php';
session_start();
if (isset($_GET['email'])||isset($_GET['pass'])) {
	$email=$_GET['email'];
	$pass=$_GET['pass'];
	if ($email==""||$pass=="") {
		if ($email=="") {
			echo '<div class="alert alert-warning alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Warning! </strong>Email is required</div>';
		}
		if ($pass=="") {
			echo '<div class="alert alert-warning alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Warning! </strong>Password is required</div>';
		}
	}else{
		$pass=md5($pass);
		$sql="SELECT * FROM users WHERE email='$email' AND password='$pass'";
		$result=mysqli_query($con,$sql);
		if ($result->num_rows) {
			while ($row=mysqli_fetch_assoc($result)) {
				$_SESSION['email']=$row['email'];
				$_SESSION['name']=$row['name'];
				?>
				<meta http-equiv="refresh" content="0.1">
				<?php
			}
		}else{
			echo '<div class="alert alert-danger alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Error!</strong>Your email or password is error</div>';
		}
	}
}
 ?>