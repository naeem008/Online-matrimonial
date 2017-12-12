<?php 
$con=new mysqli('127.0.0.1','root','','naeem');
if (!$con) {
	echo "database is not connected";
}