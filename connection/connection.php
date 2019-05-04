<?php
	$servername = "localhost";
	$userName = "root";
	$password = "";
	$dbname = "todolist";

	$conn = mysqli_connect($servername,$userName,$password,$dbname);
	if($conn->connect_error){
		die("connection faild!!");
		echo $conn->connect_error;
	}
?>