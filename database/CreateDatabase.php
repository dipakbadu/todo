<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	//create connection
	$con = mysqli_connect($servername,$username,$password);
	//check connection
	if($con->connect_error){
		die("connection faild: ".$con->connect_error);
	}

	//create database
	$sql = "CREATE DATABASE todolist";;

	if($con->query($sql)==TRUE){
		echo "database created sucessfully";
	}
	else{
		echo "Error creating database: " . $conn->error;
	}
?>