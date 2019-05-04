<?php
	include "../connection/connection.php";
	$sql = "CREATE TABLE Register (
			id INT PRIMARY KEY AUTO_INCREMENT,
			FullName varchar(50),
			UserName varchar(50),
			Email varchar(50),
			Password varchar(50),
			confirmPassword varchar(50)
			 )";

		if($conn->query($sql)==TRUE){
			echo "New table created successfully";
		}else{
			echo "error: ".$sql."<br/>";
		}
		$conn->close();
?>